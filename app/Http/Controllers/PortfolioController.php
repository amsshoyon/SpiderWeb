<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Portfolio;
use App\Catagory;
use App\Image;
use App\Http\Requests\PortfolioRequest;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $Portfolios = Portfolio::with('catagory')->get();
        $CatagoryList = Catagory::all()->pluck('name', 'id');
        return view('dashboard.portfolio')->with(compact('Portfolios','CatagoryList'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortfolioRequest $request)
    {
        $image_name = time().'.'.$request->image->getClientOriginalExtension();

        // Uplaod image
        $path= $request->file('image')->move(public_path('/images/portfolio/cover'), $image_name);


        // Upload Photo
        $image = new Portfolio;
        $image->title = $request->input('title');
        $image->description = $request->input('description');
        $image->link = $request->input('link');
        $image->catagory_id = $request->input('catagory_id');
        $image->cover = $image_name;

        $image->save();

        return back()->with('success', 'Image Uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $images = Portfolio::find($id)->Image;
        $Portfolio = Portfolio::with('catagory')->find($id);
        return view('dashboard.screenshoots',compact('Portfolio','images'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Portfolio = Portfolio::find($id);
        $CatagoryList = Catagory::all()->pluck('name', 'id');
        return view('dashboard.edit_portfolio',compact('Portfolio','CatagoryList'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update=Portfolio::findOrFail($id);

        if ($request->hasFile('image')) {

            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if(file_exists(public_path('/images/portfolio/cover/'.$update->image))){
                File::delete('/images/portfolio/cover/'.$update->image);
                $image_name = time().'.'.$request->image->getClientOriginalExtension();
                $path= $request->file('image')->move(public_path('/images/portfolio/cover'), $image_name);
            }

            $update->cover = $image_name;

        }
        $update->title = $request['title'];
        $update->catagory_id = $request['catagory_id'];
        $update->description = $request['description'];
        $update->link = $request['link'];

        $update->save();             
        return redirect('/Dashboard/Portfolio')->with('success', 'Portfolio Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $images = Portfolio::find($id)->Image;

        if(unlink(public_path('/images/portfolio/cover/'.$portfolio->cover))){
            foreach ($images as $image) {
                $img = Image::find($image->id);
                unlink(public_path('/images/portfolio/images/'.$image->image));
                $img->delete();
            }
            $portfolio->delete();
            return back()->with('success', 'Portfolio Deleted');
        }

    }
}
