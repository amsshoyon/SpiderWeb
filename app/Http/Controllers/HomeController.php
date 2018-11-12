<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Slider;
use App\About;
use App\FeaturedServices;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage() {

        return View::make('page.home')
            ->with('Sliders', Slider::all())
            ->with('About', About::find(1))
            ->with('Services', FeaturedServices::all()); 

    }
}
