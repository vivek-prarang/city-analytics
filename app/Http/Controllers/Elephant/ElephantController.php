<?php

namespace App\Http\Controllers\Elephant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ElephantController extends Controller
{
    public function stateWiseElephant(Request $request)
    {
        $healths = httpGet('e-healts');
        return view('elephant.health', compact('healths'));
    }
}
