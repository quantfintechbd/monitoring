<?php
 
namespace App\Modules\BoAccount\Models\Scopes;
 
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
 
class BoNomineeInformationScope implements Scope
{
    public function apply(Builder $builder, Model $model): void
    {
        $builder->where(function($query) {
            if (auth()->hasUser() && !auth()->user()->isSuperadmin() && auth()->user()->can('access-only-own-data')) {
                $query->where('user_id', auth()->user()->id);
            }
        });
    }
}