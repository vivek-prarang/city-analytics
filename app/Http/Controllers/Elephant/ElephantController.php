<?php

namespace App\Http\Controllers\Elephant;

use App\Http\Controllers\Controller;
use Request;


class ElephantController extends Controller
{
    public function stateWiseElephant(Request $request)
    {
        if (Request::is('india/health')){
            $healths = httpGet('e-healts');
            return view('elephant.health', compact('healths'));
        }else if(Request::is('india/wealth')){
            $wealths = httpGet('e-wealts');
            return view('elephant.wealth', compact('wealths'));
        }else if(Request::is('india/demo')){
            $demos = httpGet('e-demos');
            return view('elephant.demo', compact('demos'));
        }else if(Request::is('india/edus')){
            $edus = httpGet('e-edus');
            return view('elephant.edus', compact('edus'));
        }else if(Request::is('india/gov')){
            $govs = httpGet('e-govs');
            return view('elephant.gov', compact('govs'));
        }else if(Request::is('india/ints')){
            $ints = httpGet('e-ints');
            return view('elephant.ints', compact('ints'));
        }else if(Request::is('india/langs')){
            $langs = httpGet('e-langs');
            return view('elephant.langs', compact('langs'));
        }else if(Request::is('india/medias')){
            $medias = httpGet('e-medias');
            return view('elephant.medias', compact('medias'));
        }else if(Request::is('india/welth')){
            $healths = httpGet('e-healts');
            return view('elephant.health', compact('healths'));
        }else if(Request::is('india/welth')){
            $healths = httpGet('e-healts');
            return view('elephant.health', compact('healths'));
        }else if(Request::is('india/welth')){
            $healths = httpGet('e-healts');
            return view('elephant.health', compact('healths'));
        }else if(Request::is('india/welth')){
            $healths = httpGet('e-healts');
            return view('elephant.health', compact('healths'));
        }else{
            return withErrors('something went wrong');
        }
    }
}
