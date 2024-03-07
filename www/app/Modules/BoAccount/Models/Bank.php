<?php

namespace App\Modules\BoAccount\Models;

use App\Modules\Main\Enums\ActiveInactiveEnum;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'banks';
    protected $primaryKey = 'id';  

    public static function dropdown()
    {
        return self::where('status', ActiveInactiveEnum::Active)->pluck("name", "id");
    }

}