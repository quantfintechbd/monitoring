<?php


/*
* ---------------------------------------------------------
* BO PROFILE EXPORT HELPER 
* ---------------------------------------------------------
*/

use Carbon\Carbon;

if (!function_exists('bo_country')) {
    function bo_country($name = null, $length = 3) {
        return _string_($name, $length);
    }
}

if (!function_exists('bo_gender')) {
    function bo_gender($name = null, $length = 1) {
        return _string_($name, $length);
    }
}

if (!function_exists('_string_')) {
    function _string_($str = null, $length = 100) {
        if (empty($str) || strlen($str) < $length) {
            return strtoupper($str);
        }
        return strtoupper(substr($str, 0, $length));
    }
}

if (!function_exists('bo_date')) {
    function bo_date($date = null, $separator = "") {
        return $date ? date("d{$separator}m{$separator}Y", strtotime($date)) : $date;
    }
}
