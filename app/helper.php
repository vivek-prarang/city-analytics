<?php

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
