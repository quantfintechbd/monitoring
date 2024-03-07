<?php

namespace App\Modules\LogData\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogData extends Model
{
    use HasFactory;

    protected $connection = 'log_db_pgsql';

    protected $table = 'logs_data';

    protected $fillable = ['broker', 'envr', 'level', 'source', 'json_data', 'date_time'];
}
