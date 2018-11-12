<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Image;
use App\Portfolio;
//use App\Http\Requests\PortfolioRequest;

class ImageController extends Controller
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
        return ('ok');
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
    public function store(Request $request)
    {
        $image_id = $request->input('image_id');

        $input=$request->all();
        $images=array();
        if($files=$request->file('images')){
            $img_cunt = '1';
            foreach($files as $file){
                $name=$file->getClientOriginalExtension();
                $image_name = time().'_'.$img_cunt.'.'.$name;
                $path= $file->move(public_path('/images/portfolio/images'), $image_name);
                $img_cunt++;
                $image = new Image;
                $image->image = $image_name;
                $image->portfolio_id = $image_id;
                $image->save();
            }
        }

        return back()->with('success', 'Your images has been successfully uploaded.');

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
        return view('dashboard.delete',compact('Portfolio','images'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::find($id);

        if(unlink(public_path('/images/portfolio/images/'.$image->image))){
            $image->delete();
            return back()->with('success', 'Image Deleted');
        }
    }
}
