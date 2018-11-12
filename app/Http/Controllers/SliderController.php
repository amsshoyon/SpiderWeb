<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Http\Requests\SliderRequest;
use File;

class SliderController extends Controller
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
        $sliders = Slider::get();
        return view('dashboard.slider')->with(compact('sliders'));    
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
    public function store(SliderRequest $request){

        $image_name = time().'.'.$request->image->getClientOriginalExtension();

        // Uplaod image
        $path= $request->file('image')->move(public_path('/images/slider'), $image_name);

        // Upload Photo
        $image = new Slider;
        $image->title = $request->input('title');
        $image->description = $request->input('description');
        $image->image = $image_name;

        $image->save();

        return redirect('/Dashboard/Slider/')->with('success', 'Image Uploaded');
    }
            
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        $sliders = Slider::get();
        return view('dashboard.slider',compact('sliders'),compact('slider'));  
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
        $update=Slider::findOrFail($id);

        if ($request->hasFile('image')) {

            if(file_exists(public_path('/images/slider/'.$update->image))){
                File::delete('/images/slider/'.$update->image);
            }

            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $path= $request->file('image')->move(public_path('/images/slider'), $image_name);
            $update->image = $image_name;

        }
        $update->title = $request['title'];
        $update->description = $request['description'];

        $update->save();             
        return redirect('/Dashboard/Slider/')->with('success', 'Image Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        $image = Slider::find($id);

        if(unlink(public_path('/images/slider/'.$image->image))){
            $image->delete();
            return back()->with('success', 'Slider Image Deleted');
        }
    }
    
}
