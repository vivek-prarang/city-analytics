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
        }else if(Request::is('india/demos')){
            $demos = httpGet('e-demos');
            return view('elephant.demo', compact('demos'));
        }else if(Request::is('india/edus')){
            $edus = httpGet('e-edus');
            return view('elephant.edus', compact('edus'));
        }else if(Request::is('india/govs')){
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
        }else if(Request::is('india/urbs')){
            $urbs = httpGet('e-urbs');
            return view('elephant.urbs', compact('urbs'));
        }else if(Request::is('india/works')){
            $works = httpGet('e-works');
            return view('elephant.works', compact('works'));
        }else if(Request::is('india/nature')){
            $nature = httpGet('e-nature');
            return view('elephant.nature', compact('nature'));
        }else if(Request::is('india/culture')){
            $culture = httpGet('e-culture');
            return view('elephant.culture', compact('culture'));
        }else{
            return withError('something went wrong');
        }
    }
}
