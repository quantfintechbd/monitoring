<?php

namespace App\Modules\BoAccount\Models;

use App\Models\User;
use App\Modules\BoAccount\Models\Scopes\BoAccountHolderScope;
use App\Modules\Main\Utilities\ActivityLogTrait;
use Illuminate\Database\Eloquent\Model;

class BoAccountHolder extends Model
{
    use ActivityLogTrait;

    protected $fillable = ["*"];
    protected $table = 'bo_account_holder';
    protected $primaryKey = 'id';  

    protected static function booted(): void
    {
        static::addGlobalScope(new BoAccountHolderScope());
    }

}
