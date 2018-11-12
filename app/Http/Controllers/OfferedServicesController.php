<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\OfferedServices;
use App\Http\Requests\OfferedServicesRequest;

class OfferedServicesController extends Controller
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
        $OfferedServices = OfferedServices::get();
        return view('dashboard.OfferedServices')->with(compact('OfferedServices'));    
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
    public function store(OfferedServicesRequest $request)
    {
        $image_name = time().'.'.$request->image->getClientOriginalExtension();

        // Uplaod image
        $path= $request->file('image')->move(public_path('/images/services'), $image_name);
        $store = new OfferedServices;
        $store->title = $request->input('title');
        $store->description = $request->input('description');
        $store->image = $image_name;

        $store->save();

        return redirect('/Dashboard/OfferedServices/')->with('success', 'Service Added');
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
        $OfferedService = OfferedServices::find($id);
        $OfferedServices = OfferedServices::get();
        return view('dashboard.OfferedServices',compact('OfferedServices'),compact('OfferedService'));  
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
        $update = OfferedServices::findOrFail($id);

        if ($request->hasFile('image')) {

            if(file_exists(public_path('/images/services/'.$update->image))){
                File::delete('/images/services/'.$update->image);
            }

            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $path= $request->file('image')->move(public_path('/images/services'), $image_name);
            $update->image = $image_name;

        }   
        $update->title = $request['title'];
        $update->description = $request['description'];

        $update->save();             
        return redirect('/Dashboard/OfferedServices/')->with('success', 'Service Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = OfferedServices::find($id);

        if(unlink(public_path('/images/services/'.$image->image))){
            $image->delete();
            return back()->with('success', 'Slider Image Deleted');
        }
    }
}
