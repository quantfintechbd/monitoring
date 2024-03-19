<?php

namespace App\Modules\LogData\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\LogData\Models\LogData;
use App\Modules\LogData\Services\LogDataService;

class LogDataController extends Controller
{
    private $logDataService;
    private $pageName = "Application Log Data";

    public function __construct(LogDataService $logDataService)
    {
        $this->logDataService = $logDataService;
    }
    /**
     * Display the log data
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $logs = $this->logDataService->getAll($request);
        return view("LogData::index", [
            'logs' => $logs,
            'pageName' => $this->pageName,
        ]);
    }
}
