<?php

namespace Database\Seeders;

use App\Models\User;
use App\Modules\Main\Models\Permission;
use App\Modules\Main\Models\Module;
use App\Modules\Main\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            // Clear existing roles and permissions
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            Role::truncate();
            Permission::truncate();
            Module::truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

            // Create roles
            $roles = ['Super Admin', 'Admin', 'User'];
            foreach ($roles as $role) {
                Role::firstOrCreate(['name' => $role]);
            }

            // Insert data into the permission_module table
            Module::insert([
                ['id' => 1, 'name' => 'Access Control', 'status' => 1, 'created_at' => now()],
                ['id' => 2, 'name' => 'User', 'status' => 1, 'created_at' => now()],
                ['id' => 3, 'name' => 'Logs', 'status' => 1, 'created_at' => now()],
                ['id' => 4, 'name' => 'Bo Account', 'status' => 1, 'created_at' => now()]
            ]);

            // Define permissions for different modules
            $permissions = [
                // Permissions for module_id 1
                [
                    'module_id' => 1,
                    'permissions' => [
                        'access-only-own-data',
                        'module-list', 'module-create', 'module-update',
                        'permission-list', 'permission-create', 'permission-update',
                        'role-list', 'role-create', 'role-update'
                    ]
                ],
                // Permissions for module_id 2
                [
                    'module_id' => 2,
                    'permissions' => [
                        'user-list', 'user-create', 'user-update',
                        'user-reset-password', 
                        // 'user-whitelisted-ip', 'user-whitelisted-ip-create', 'user-whitelisted-ip-update',
                        'user-pretend-login', 'user-session'
                    ]
                ],
                // Permissions for module_id 3
                [
                    'module_id' => 3,
                    'permissions' => ['log-viewer', 'activity-log']
                ],
                // BO Account for module_id 4
                [
                    'module_id' => 4,
                    'permissions' => [
                        'bo-user-list', 'bo-user-create', 'bo-user-update', 'bo-user-profile', 'bo-user-profile-edit',
                        'bo-account-holder', 'bo-bank-information', 'bo-authorize-information', 'bo-nominee-information',
                        'bo-document', 'download-bo-file'
                    ]
                ]
            ];

            // Assign permissions to the admin role
            $adminRole = Role::where('name', 'Admin')->first();
            foreach ($permissions as $permissionModule) {
                foreach ($permissionModule['permissions'] as $permissionName) {
                    $permission = Permission::firstOrCreate([
                        'name' => $permissionName,
                        'module_id' => $permissionModule['module_id']
                    ]);
                    $adminRole->givePermissionTo($permission);
                }
            }

            // Assign superadmin roles to a the first
            $user = User::first();
            $user->assignRole("Super Admin"); 
        

        } catch (\Exception $e) {
            throw $e;
        }
    }
}
