<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Home extends Controller
{
    public function home(Request $request)
    {
        $cities = httpGet('cities', ['group' => 'MSTR1', 'id' => [675, 667, 651, 661], 'condition' => 'whereNotIn']);
        $cities = $cities['data'];
        $liveCities = httpGet('cities', ['group' => 'MSTR1', 'id' => [675, 667, 651, 661], 'condition' => 'whereIn']);
        $liveCities = $liveCities['data'];
        return view('main.home', compact('liveCities', 'cities'));
    }
    public function staticCity(Request $request, $id, $city)
    {
        $cityInfo = httpGet('city-info', ['id' => $id])['data'];

        $data = httpGet('district-info', ['id' => $id]);
        $cityData = $data['data'];
        $top3Languages = $data['language'];
        return view('main.city', compact('cityData', 'cityInfo', 'top3Languages'));
    }
}
