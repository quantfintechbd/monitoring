<?php
 
namespace App\Modules\Main\Models\Scopes;
 
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
 
class UserScope implements Scope
{
    public function apply(Builder $builder, Model $model): void
    {
        $builder->where(function($query) {
            if (auth()->hasUser() && !auth()->user()->isSuperadmin() && auth()->user()->can('access-only-own-data')) {
                $query->where('id', auth()->user()->id);
            }
        });
    }
}