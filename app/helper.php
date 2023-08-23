<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

// Function To Hit API  --START--
if (!function_exists('httpGet')) {
    function httpGet($url, $parameters = [])
    {
        try {
            $header = ['api-auth-token' =>  config('apidata.TOKEN'), 'api-auth-type' => config('apidata.TYPE'), 'Content-Type' => 'application/json'];
            $response = Http::withHeaders($header)
                ->get(config('apidata.MICRO_SERVICE_ROOT_URL') . '/api/' . $url, $parameters); #Base Url + Parameters
            if ($response->failed()) {
                return Redirect::back()->withErrors(['apiError' => $response->status() . ' : Unable to reach.']);
            } else {
                return $response->json(); #  Returning Response  (Json)
            }
        } catch (Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 401);
        }
    }
}

if (!function_exists('httpPost')) {
    function httpPost($url, $parameters)
    {
        try {
            $header = ['api-auth-token' =>  config('apidata.TOKEN'), 'api-auth-type' => config('apidata.TYPE'), 'Content-Type' => 'application/json'];
            $response = Http::withHeaders($header)
                ->post(config('apidata.MICRO_SERVICE_ROOT_URL') . '/api/' . $url, $parameters); #Base Url + Parameters
            if ($response->failed()) {
                return Redirect::back()->withErrors(['apiError' => $response->status() . ' : Unable to reach.']);
            } else {
                return $response->throw()->json();  #  Returning Response  (Json)
            }
        } catch (Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 401);
        }
    }
}

if (!function_exists('vertical')) {
    function vertical($table = null)
    {
        if ($table == null) {
            $items = DB::table('verticalsname')->get()->toArray();
        } else {
            $items = DB::table('verticalsname')->whereIn('table_name', $table)->get()->toArray();
        }
        $data = array();
        foreach ($items as $item) {
            $data[$item->id] = $item;
        }
        return $data;
    }
}
if (!function_exists('numFormat')) {
    function numFormat($num, $rank = false)
    {
        $num = intval($num);
        if (!$rank) {
            return number_format($num, 0, '.', ',');
        } else {
            return getSuperScript($num);
        }
    }
}

if (!function_exists('getSuperScript')) {
    function getSuperScript($number)
    {
        $lastDigit = $number % 10;
        $lastTwoDigits = $number % 100;
        if ($lastTwoDigits >= 11 && $lastTwoDigits <= 13) {
            $ordinal = 'th';
        } else {
            switch ($lastDigit) {
                case 1:
                    $ordinal = 'st';
                    break;
                case 2:
                    $ordinal = 'nd';
                    break;
                case 3:
                    $ordinal = 'rd';
                    break;
                default:
                    $ordinal = 'th';
                    break;
            }
        }
        echo number_format($number, 0, '.', ',') . '<sup>' . $ordinal . '</sup>';
    }
}

if (!function_exists('realName')) {
    function realName($name)
    {
        switch ($name) {
            case 'e_demos':
                return "Demography";
                break;
            case 'e_edus':
                return "Education";
                break;
            case 'e_govs':
                return "Government";
                break;

            case 'e_healths':
                return "Health";
                break;

            case 'e_medias':
                return "Media";
                break;

            case 'e_urbs':
                return "Urbanization";
                break;

            case 'e_wealths':
                return "Wealth";
                break;

            case 'e_works':
                return "Work";
                break;

            case 'e_ints':
                return "Internet";
                break;
            case 'e_langs':
                return "Language";
                break;
            case 'city_masters':
                return "Demography";
                break;

            default:
                return "---";
                break;
        }
    }
}
