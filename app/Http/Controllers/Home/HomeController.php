<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Testimony;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $data = [
            'testimonies' => Testimony::all(),
        ];

        return view('home', $data);

    }

    public function about(){

        return view('about-us');
    }

    public function contact(){

        return view('contact-us');
    }
}
