<?php

namespace App\Modules\Main\Models;

use Illuminate\Database\Eloquent\Model;

class UserWhiteListedIp extends Model
{
    protected static $logAttributes = ['*'];
    public $timestamps = true;
    protected $table = 'user_white_listed_ips';
    protected $guarded = [];
}
