<?php

namespace App\Modules\BoAccount\Models;

use App\Modules\BoAccount\Models\Scopes\BoNomineeInformationScope;
use App\Modules\Main\Utilities\ActivityLogTrait;
use Illuminate\Database\Eloquent\Model;

class BoNomineeInformation extends Model
{

    use ActivityLogTrait;

    protected $fillable = ["*"];
    protected $table = 'bo_nominee_information';
    protected $primaryKey = 'id';  

    protected static function booted(): void
    {
        static::addGlobalScope(new BoNomineeInformationScope());
    }
}
