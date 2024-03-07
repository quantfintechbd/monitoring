<?php

namespace App\Modules\LogData\Services;

use App\Modules\LogData\Models\LogData;
use Carbon\Carbon;
use Exception;

class LogDataService
{
    public function getAll($request)
    {
        return LogData::where(function($query) use ($request) {
                if ($request->filled("date_from")) {
                    $dateFrom = Carbon::parse($request->date_from)->startOfDay()->setTimezone('UTC')->toDateTimeString();
                    $query->where("date_time", '>=', $dateFrom);
                }

                if ($request->filled("to_date")) {
                    $toDate = Carbon::parse($request->to_date)->endOfDay()->setTimezone('UTC')->toDateTimeString();
                    $query->where("date_time", '<=', $toDate);
                }

                if ($request->filled("broker")) {
                    $query->where("broker", "like", "%{$request->broker}%");
                }
                if ($request->filled("environment")) {
                    $query->where("envr", $request->environment);
                }
                if ($request->filled("level")) {
                    $query->whereIn("level", msisdns($request->level));
                }
                if ($request->filled("source")) {
                    $query->where("source", $request->source);
                }
            })
            ->orderBy("id", "desc")
            ->paginate($request->per_page ?? 50);
    }
}
