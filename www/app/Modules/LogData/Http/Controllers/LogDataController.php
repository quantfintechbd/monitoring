<?php

namespace App\Modules\LogData\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\LogData\Models\LogData;

class LogDataController extends Controller
{

    /**
     * Display the log data
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("LogData::index", [
            'logs' => LogData::orderBy('id', 'desc')->paginate(100)
        ]);
    }
}
