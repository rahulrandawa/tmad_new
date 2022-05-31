<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function php(){
        return view('web/developers/backend/php');
    }
    public function java(){
        return view('web/developers/backend/java');
    }
    public function laravel(){
        return view('web/developers/backend/laravel');
    }

    public function python(){
        return view('web/developers/backend/python');
    }
    public function ruby(){
        return view('web/developers/backend/ruby');
    }
    public function clang(){
        return view('web/developers/backend/c');
    }
    public function firebase(){
        return view('web/developers/backend/firebase');
    }
    public function golang(){
        return view('web/developers/backend/golang');
    }
    public function symfony(){
        return view('web/developers/backend/symfony');
    }
    public function django(){
        return view('web/developers/backend/django');
    }
    public function node(){
        return view('web/developers/backend/node');
    }

    public function dot_net(){
        return view('web/developers/backend/dot-net');
    }

    public function angular(){
        return view('web/developers/frontend/angular');
    }
    public function html_css(){
        return view('web/developers/frontend/html-css');
    }
    public function powerbi(){
        return view('web/developers/frontend/powerbi');
    }
    public function react(){
        return view('web/developers/frontend/react');
    }
    public function vue(){
        return view('web/developers/frontend/vue');
    }
    public function android(){
        return view('web/developers/mobile/android');
    }
    public function flutter(){
        return view('web/developers/mobile/flutter');
    }
    public function ionic(){
        return view('web/developers/mobile/ionic');
    }
    public function ios(){
        return view('web/developers/mobile/ios');
    }
    public function kotlin(){
        return view('web/developers/mobile/kotlin');
    }
    public function react_native(){
        return view('web/developers/mobile/react-native');
    }
    public function swift(){
        return view('web/developers/mobile/swift');
    }
    public function xamarin(){
        return view('web/developers/mobile/xamarin');
    }
    public function mean(){
        return view('web/developers/fullstack/mean');
    }
    public function mern(){
        return view('web/developers/fullstack/mern');
    }
    public function cryptocurrency(){
        return view('web/developers/blockchain/cryptocurrency');
    }
    public function ethereum(){
        return view('web/developers/blockchain/ethereum');
    }
    public function ico(){
        return view('web/developers/blockchain/ico');
    }
    public function smart_contract(){
        return view('web/developers/blockchain/smart-contract');
    }
    public function solidity(){
        return view('web/developers/blockchain/solidity');
    }
}
