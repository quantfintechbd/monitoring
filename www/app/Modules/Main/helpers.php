<?php

use App\Modules\Auth\Services\AuthOtpService;
use App\Modules\Main\Services\UserService;
use Carbon\Carbon;

if (!function_exists('dbToDateTime')) {
    function dbToDateTime($date, $format = "F d, Y H:i:s") {
        if ($date instanceof \DateTimeInterface) {
            return $date->format($format);
        } elseif (is_string($date)) {
            // Check if the date is in "Y-m-d H:i:s" format
            if (preg_match('/^\d{4}-\d{2}-\d{2}\s\d{2}:\d{2}:\d{2}$/', $date)) {
                return Carbon::createFromFormat("Y-m-d H:i:s", $date)->format($format);
            } elseif (preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
                return Carbon::createFromFormat("Y-m-d", $date)->format($format);
            }
        }
        return $date;
    }
}


if (!function_exists('dbUTCToDateTime')) {
    function dbUTCToDateTime($utcDateTimeString, $timezone = 'Asia/Dhaka', $format = 'Y-m-d H:i:s')
    {
        // Parse the UTC datetime string and set the timezone to UTC
        $utcDateTime = Carbon::parse($utcDateTimeString)->timezone('UTC');

        // Convert to the desired timezone
        $dateTimeInTimeZone = $utcDateTime->timezone($timezone);

        // Format the datetime string
        return $dateTimeInTimeZone->format($format);
    }
}


if (!function_exists('dbToDate')) {
    function dbToDate($date, $format = "F d, Y") {
        return dbToDateTime($date, $format);
    }
}

if (!function_exists('formatDateTime')) {
    function formatDateTime($dateTimeString)
    {
        $dateTime = Carbon::parse($dateTimeString);

        // Check if the datetime is within the current day
        if ($dateTime->isToday()) {
            return $dateTime->diffForHumans();
        } else {
            return $dateTime->toDateTimeString();
        }
    }
}


if (!function_exists('dbToTime')) {
    function dbToTime($date, $format = "h:i:s") {
        return dbToDateTime($date, $format);
    }
}

if (!function_exists('getApiToken')) {
    function getApiToken() {
        $str = implode("", array_merge(range("0","9"), range("A","Z")));
        return substr(str_shuffle($str), 0, 4) . '-' .
            substr(str_shuffle($str), 0, 4) . '-' .
            substr(str_shuffle($str), 0, 4) . '-' .
            substr(str_shuffle($str), 0, 5);
    }
}


if (!function_exists('uniqueId')) {
    function uniqueId($prefix = '', $postfix = '') {
        return "{$prefix}". uniqid() . "{$postfix}";
    }
}

if (!function_exists('mask')) {
    function mask($str, $pattern = "*") {
        $len   = strlen($str);
		$limit = round($len/3);

		$start  = substr($str, 0, $limit);
		$middle = str_repeat($pattern, $limit);
		$end    = substr($str, ($limit*2), $len);

		return $start.$middle.$end;
    }
}


if (!function_exists('msisdn')) {
    function msisdn($msisdn = null) {
        $msisdn = trim($msisdn);
        $localMsisdn = preg_match('/(^(\+880|00880|880|0)?(1){1}[3456789]{1}(\d){8})$/', $msisdn);
        if ($localMsisdn) {
            return '880' . substr($msisdn, -10);
        } else {
            return $msisdn;
        }
    }
}

if (!function_exists('msisdn_prefix')) {
    function msisdn_prefix($msisdn) {
        $msisdn = trim($msisdn);
        $localMsisdn = preg_match('/(^(\+880|00880|880|0)?(1){1}[3456789]{1}(\d){8})$/', $msisdn);
        if ($localMsisdn) {
            $msisdn =  '0' . substr($msisdn, -10);
        }
        return substr($msisdn, 0, 3);
    }
}

// return 3 formatted numbers
if (!function_exists('msisdns')) {
    function msisdns($msisdn = null) {
        $msisdn = trim($msisdn);
        $localMsisdn = preg_match('/(^(\+880|00880|880|0)?(1){1}[3456789]{1}(\d){8})$/', $msisdn);
        if ($localMsisdn) {
            return [
                 substr($msisdn, -10),
                '0' . substr($msisdn, -10),
                '880' . substr($msisdn, -10),
            ];
        } else {
            return is_string($msisdn) ? [$msisdn] : $msisdn;
        }
    }
}


// return all sms processing tables
if (!function_exists('getSmsProcessingTable')) {
    function getSmsProcessingTable($table = null) {
        $tables = [
            'sms_api',
            'sms_bulk'
        ];

        if ($table === null) {
            return $tables;
        }

        $table = strtolower($table);

        if (in_array($table, $tables)) {
            return $table;
        }

        return null;
    }
}


// article read more/less
if (!function_exists('readMoreLess')) {
    function readMoreLess($str, $length = 20) {
        if (strlen($str) > $length) {
            $str = '<p style="white-space:normal;text-overflow: ellipsis;"><span>' . mb_substr($str, 0, $length) . '</span><span class="hidden-text" style="display: none">' . mb_substr($str, $length) . '</span> <a href="#" class="show-more text-primary fw-bold" onclick="showMore(this); return false;"> ...See More</a><a href="#" style="display: none" class="hidden-text text-primary fw-bold" onclick="lessSms(this); return false;"> ...See Less</a></p>';
        }
        return $str;
    }
}


// random string
if (!function_exists('getRandomString')) {
    function getRandomString($length = 8) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_[]{}';
        $randomChars = array_map(function() use ($characters) {
            return $characters[rand(0, strlen($characters) - 1)];
        }, range(1, $length));
        $password = implode('', $randomChars);
        return $password;
    }
}

// random string
if (!function_exists('getUserName')) {
    function getUserName() {
        return (new AuthOtpService)->getUserName();
    }
}


if (!function_exists("createOrUpdateUserSession")) {
    function createOrUpdateUserSession($type, $pretentId = null, $guard = 'web') {
        (new UserService)->saveUserSession($type, $pretentId, $guard);
    }
}

if (!function_exists("publicAsset")) {
    function publicAsset($path) {
        if (file_exists($path)) {
            if (request()->get('pdf')) {
                return "./{$path}";
            } else {
                return asset($path);
            }
        }
        return "";
    }
}


if(!function_exists('getLogProperties')) {
    function getLogProperties ($data = "", $type = "", $length = 20) {
        if (empty($data) || !is_object($data)) {
            return "";
        }

        if (isset($data[$type])) {
            $result = json_encode($data[$type], JSON_PRETTY_PRINT);
        } else {
            $result = json_encode($data, JSON_PRETTY_PRINT);
        }

        return readMoreLess("<pre>{$result}</pre>", $length,);

    }
}

if (!function_exists('getLogUser')) {
    function getLogUser($model = null, $id = null) {
        if (empty($model) || empty($id)) {
            return $model;
        }
        $data = ("\App\Models\User")::where("id", $id)->first();
        if (empty($data)) {
            return "No user found!";
        }
        return $data->value("name") ?? "";
    }
}

if (!function_exists('getBrokerList')) {
    function getBrokerList() {
        return [
            'UFTCL' => 'UFTCL'
        ];
    }
}

if (!function_exists('getEnvironemts')) {
    function getEnvironemts() {
        return [
            'UAT' => 'UAT',
            'UAT_PROD' => 'UAT_PROD',
            'PROD' => 'PROD',
        ];
    }
}

if (!function_exists('getLogTypes')) {
    function getLogTypes() {
        return [
            'ERR' => 'ERR',
            'LOG' => 'LOG',
            'MSG' => 'MSG',
        ];
    }
}

