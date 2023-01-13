<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Job;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function home():View
    {
        $data = [
            'testimonies' => Testimony::all(),
            'jobs' => Job::limit(4)->get(),
        ];
        return view('home', $data);
    }

    /**
     * @return View
     */
    public function about() :View
    {
        return view('about-us');
    }

    /**
     * @return View
     */
    public function contact() :View
    {
        return view('contact-us');
    }

    /**
     * @return View
     */
    public function gallery() :View
    {
        $galleries = Gallery::all();
        return view('gallery', compact('galleries'));
    }
}
