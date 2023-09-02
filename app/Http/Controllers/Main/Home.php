<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class Home extends Controller
{
    // City ID : 675:Rampur,667:Meerut,651:Jaunpur, 661:Lucknow
    public function home(Request $request)
    {
        $cities = httpGet('cities', ['group' => 'MSTR1']);
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
        $liveCities  = httpGet('cities', ['group' => 'MSTR1', 'id' => [675, 667, 651, 661], 'condition' => 'whereIn'])['data'];
        $wpp = [];#httpGet('get-wpp', ['city_id' => $id]);
        $posNegData = httpGet('get-top-rank-data', ['city_id' => $id]);
        $posData = $posNegData['posData'];
        $negData = $posNegData['negData'];
        return view('main.city', compact('cityData', 'cityInfo', 'top3Languages', 'liveCities', 'wpp', 'posData', 'negData'));
    }
}
