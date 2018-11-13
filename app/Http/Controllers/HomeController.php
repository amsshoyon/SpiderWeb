<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use File;
use App\Slider;
use App\About;
use App\Catagory;
use App\Image; 
use App\Portfolio;
use App\FeaturedServices;
use App\Team;;

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

        $Portfolios = Portfolio::with('catagory')->get();
        $CatagoryList = Catagory::get();
        $Sliders = Slider::get();
        $About = About::first();
        $Services = FeaturedServices::get();
        $Teams = Team::get();
        return view('page.home')->with(compact('Portfolios','CatagoryList','Sliders','About', 'Services', 'Teams'));
    }
}
