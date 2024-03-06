<?php

namespace App\Modules\BoAccount\Models;

use App\Modules\BoAccount\Models\Scopes\BoAuthorizeInformationScope;
use App\Modules\Main\Utilities\ActivityLogTrait;
use Illuminate\Database\Eloquent\Model;

class BoAuthorizeInformation extends Model
{

    use ActivityLogTrait;
    protected $fillable = ["*"];
    protected $table = 'bo_authorize_information';
    protected $primaryKey = 'id';  

    protected static function booted(): void
    {
        static::addGlobalScope(new BoAuthorizeInformationScope());
    }
}
