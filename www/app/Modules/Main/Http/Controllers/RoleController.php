<?php

namespace App\Modules\Main\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Main\Models\Module;
use App\Modules\Main\Models\Permission;
use App\Modules\Main\Models\Role;
use App\Modules\Main\Utilities\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    private $viewPath;

    public function __construct()
    {
        $this->viewPath = 'Main::pages.role.';
    }


    /*
    *
    * MODULE
    * -------------------------------------------------------
    */

    public function module(Request $request)
    {  
        $result = Module::paginate(10); 
        return view($this->viewPath . 'module', compact(
            'result'
        )); 
    }


    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function createModule()
    { 
        $data = (object)[
            'page'   => 'Module',
            'method' => 'Create',
            'action'  => route('dashboard.role.module'),
            'item'   => [],
        ]; 

        return view($this->viewPath . 'module-form', compact('data'));
    }


    public function storeModule(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:permission_modules,name|max:255', 
        ]);

        try {

            Module::create([
                'name' => $request->name,
                'status'  => 1
            ]);

            Log::info('RoleController@storeModule - requested by  ' . ($request->user()->email ?? null) . ' - '. json_encode($request->all())); 

            return JsonResponse::success('Save successful!', $request->all()); 

        } catch(\Exception $e) {
            Log::error('RoleController@storeModule - '. $e->getMessage()); 
            return JsonResponse::internalError('Something went wrong!');
        } 
    }

 
    public function editModule($id)
    { 
        $data = (object)[
            'page'   => 'Module',
            'method' => 'Update',
            'action' => route('dashboard.role.module.update', $id),
            'item'   => Module::find($id)
        ]; 

        return view($this->viewPath . 'module-form', compact('data'));
    }


    public function updateModule(Request $request, $id)
    {
        $request->validate([
            'name'     => 'required|max:255|unique:permission_modules,name,'.$id, 
            'status'   => 'required|in:0,1', 
        ]);

        try {

            Module::where('id', $id)
            ->update([
                'name'    => $request->name,
                'status'  => $request->status
            ]);

            Log::info('RoleController@updateModule - requested by  ' . ($request->user()->email ?? null) . ' - '. json_encode($request->all())); 
            
            return JsonResponse::success('Update successful!', $request->all()); 

        } catch(\Exception $e) {
            Log::error('RoleController@updateModule - '. $e->getMessage()); 
            return JsonResponse::internalError('Something went wrong!');
        } 
    }



    /*
    *
    * PERMISSION
    * -------------------------------------------------------
    */

    public function permission()
    {
        $result = DB::table('permissions AS p')
            ->selectRaw('p.*, m.name AS module')
            ->leftJoin('permission_modules AS m', 'm.id', 'p.module_id')
            ->orderBy("m.name", "asc")
            ->orderBy("p.name", "asc")
            ->paginate(10);

        return view($this->viewPath . 'permission', compact(
            'result',
        )); 
    }


    public function createPermission()
    { 
        $data = (object)[
            'page'    => 'Permission',
            'method'  => 'Create',
            'action'  => route('dashboard.role.permission'),
            'item'    => [],
            'modules' => Module::where('status', '1')->pluck('name', 'id')
        ]; 

        return view($this->viewPath . 'permission-form', compact('data'));
    }

    public function storePermission(Request $request) 
    {
        $request->validate([
            'name'      => 'required|string|unique:permissions,name|max:255', 
            'module_id' => 'required|exists:permission_modules,id', 
        ]);

        try {

            Permission::create([
                'name'       => $request->name,
                'guard_name' => 'web',
                'module_id'  => $request->module_id
            ]);

            Log::info('RoleController@storePermission - requested by  ' . ($request->user()->email ?? null) . ' - '. json_encode($request->all())); 
            return JsonResponse::success('Save successful!', $request->all());  

        } catch(\Exception $e) {
            Log::error('RoleController@storePermission - '. $e->getMessage());
            return JsonResponse::internalError('Something went wrong!');
        } 
    }


    public function editPermission($id)
    { 
        $data = (object)[
            'page'    => 'Permission',
            'method'  => 'Update',
            'action'  => route('dashboard.role.permission.update', $id),
            'item'    => Permission::find($id),
            'modules' => Module::where('status', '1')->pluck('name', 'id')
        ]; 

        return view($this->viewPath . 'permission-form', compact('data'));
    }


    public function updatePermission(Request $request, $id)
    {
        $request->validate([
            'name'      => 'required|string|max:255|unique:permissions,name,'.$id, 
            'module_id' => 'required|exists:permission_modules,id', 
        ]);

        try {

            Permission::where('id', $id)
            ->update([
                'name'       => $request->name,
                'module_id'  => $request->module_id
            ]);

            Log::info('RoleController@updatePermission - requested by  ' . ($request->user()->email ?? null) . ' - '. json_encode($request->all())); 

            return JsonResponse::success('Update successful!', $request->all());   

        } catch(\Exception $e) {
            Log::error('RoleController@updatePermission - '. $e->getMessage()); 
            return JsonResponse::internalError('Something went wrong!');
        } 
    }

    
    /*
    *
    * ROLE
    * -------------------------------------------------------
    */

    public function role()
    {  
        $result = Role::with('permissions')
            ->paginate(10);

        return view($this->viewPath . 'role', compact(
            'result' 
        )); 
    } 

    public function createRole(Request $request)
    {
        $result = Permission::selectRaw('
                permissions.id,
                permissions.module_id,
                permissions.name,
                m.name AS module,
                CASE WHEN rhp.permission_id THEN "checked" ELSE "" END AS checked
            ')
            ->leftJoin('permission_modules AS m', 'm.id', 'permissions.module_id')
            ->leftJoin('role_has_permissions AS rhp', function($join) use($request) {
                $join->on('rhp.permission_id', '=', 'permissions.id');
            })
            ->groupBy('permissions.id')
            ->get();
    
        $modules = [];
        foreach ($result as $item) 
        {
            if (!auth()->user()->hasRole("Developer")) { 
                // ignore for other user
                if (in_array($item->name, ["module-create", "module-update", "module-list", "permission-list", "permission-create", "permission-update"])) {
                    continue;
                }
            }
            $modules[$item->module][] = (object)[
                'id'        => $item->id,
                'module_id' => $item->module_id,
                'name'      => $item->name,
                'module'    => $item->module,
                'checked'   => $item->checked
            ];
        }

        return view($this->viewPath . 'role-create', compact(
            'modules'
        )); 
    }

    public function storeRole(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255|not_in:Developer|unique:roles,name',
            'permissions' => 'sometimes|array|max:255', 
        ], [
            "name.not_in" => "The 'Developer' word is reserved for the system. Please select a different one."
        ]);

        try {

            $role = Role::create([
                'name'        => $request->name,
                'guard_name'  => 'web'
            ]);

            $role->syncPermissions($request->permissions); 

            Log::info('RoleController@storeRole - requested by  ' . ($request->user()->email ?? null) . ' - '. json_encode($request->all())); 

            return redirect()
                ->route('dashboard.role.has-permission.edit', $role->id)
                ->with('success', 'Save successful!')
                ->withInput(); 

        } catch(\Exception $e) {
            Log::error('RoleController@storeRole - '. $e->getMessage()); 

            return redirect()
                ->back()
                ->withErrors('Something went wrong!')
                ->withInput(); 
        } 
    }

    public function editRole($id)
    {
        $role = Role::findOrFail($id);
        $result = Permission::selectRaw('
                permissions.id,
                permissions.module_id,
                permissions.name,
                m.name AS module,
                CASE WHEN rhp.permission_id THEN "checked" ELSE "" END AS checked
            ')
            ->leftJoin('permission_modules AS m', 'm.id', 'permissions.module_id')
            ->leftJoin('role_has_permissions AS rhp', function($join) use($id) {
                $join->on('rhp.permission_id', '=', 'permissions.id');
                $join->where('rhp.role_id', '=', $id);
            })
            ->get();
    
        $modules = [];

        foreach ($result as $item) 
        {
            if (!auth()->user()->hasRole("Developer")) { 
                // ignore for other user
                if (in_array($item->name, ["module-create", "module-update", "module-list", "permission-list", "permission-create", "permission-update"])) {
                    continue;
                }
            }

            $modules[$item->module][] = (object)[
                'id'        => $item->id,
                'module_id' => $item->module_id,
                'name'      => $item->name,
                'module'    => $item->module,
                'checked'   => $item->checked
            ];
        }

        return view($this->viewPath . 'role-edit', compact(
            'role',
            'modules'
        )); 
    }

    public function updateRole(Request $request)
    {
        $request->validate([
            'id'          => 'required|numeric',
            'name'        => 'required|string|max:255|not_in:Developer|unique:roles,name,'.$request->id,
            'permissions' => 'sometimes|array|max:255' 
        ], [
            "name.not_in" => "The 'Developer' word is reserved for the system. Please select a different one."
        ]);

        try {

            $role = Role::where('id', $request->id)->first();
            $role->name = $request->name;
            $role->save(); 

            $role->syncPermissions($request->permissions); 

            Log::info('RoleController@updateRole - requested by  ' . ($request->user()->email ?? null) . ' - '. json_encode($request->all())); 

            return redirect()
                ->back()
                ->with('success', 'Update successful!')
                ->withInput(); 

        } catch(\Exception $e) {
            Log::error('RoleController@updateRole - '. $e->getMessage()); 

            return redirect()
                ->back()
                ->withErrors('Something went wrong!')
                ->withInput(); 
        } 
    } 

}

