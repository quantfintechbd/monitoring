<?php

namespace App\Modules\BoAccount\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoBranch extends Model
{
    protected $table = 'bo_branches';
    protected $primaryKey = 'id';  

    public static function list()
    {
        return self::where('status', 'Active')->pluck('name', 'short_code')->toArray();
    }
}
