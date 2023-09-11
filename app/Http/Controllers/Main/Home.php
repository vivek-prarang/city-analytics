<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class Home extends Controller
{

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
        $cData = httpGet('get-culture-data', ['city_id' => $id])['data'];
        $cityInfo = httpGet('city-info', ['id' => $id])['data'];
        $data = httpGet('district-info', ['id' => $id]);
        $cityData = $data['data'];
        $top3Languages = $data['language'];
        $liveCities  = httpGet('cities', ['group' => 'MSTR1', 'id' => [675, 667, 651, 661], 'condition' => 'whereIn'])['data'];
        $wpp = httpGet('get-wpp', ['city_id' => $id]);
        $posNegData = httpGet('get-top-rank-data', ['city_id' => $id]);
        $abPosData = $posNegData['abPosData'];
        $abNegData = $posNegData['abNegData'];
        $bePosData = $posNegData['bePosData'];
        $beNegData = $posNegData['beNegData'];
        return view('main.city', compact('cityData', 'cityInfo', 'top3Languages', 'liveCities', 'wpp', 'abPosData', 'abNegData', 'bePosData', 'beNegData', 'cData'));
    }
}
