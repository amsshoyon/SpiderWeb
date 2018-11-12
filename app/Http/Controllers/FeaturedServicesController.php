<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\FeaturedServices;
use App\Http\Requests\FeaturedServicesRequest;

class FeaturedServicesController extends Controller
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
        $FeaturedServices = FeaturedServices::get();
        return view('dashboard.FeaturedServices')->with(compact('FeaturedServices'));    
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
    public function store(FeaturedServicesRequest $request)
    {
         $image_name = time().'.'.$request->image->getClientOriginalExtension();

         // Uplaod image
         $path= $request->file('image')->storeAs('public/images/services/', $image_name);

         // Upload Photo
         $store = new FeaturedServices;
         $store->title = $request->input('title');
         $store->description = $request->input('description');
         $store->size = $request->file('image')->getClientSize();
         $store->image = $image_name;

         $store->save();

         return redirect('/Dashboard/FeaturedServices/')->with('success', 'Service Added');
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
        $FeaturedService = FeaturedServices::find($id);
        $FeaturedServices = FeaturedServices::get();
        return view('dashboard.FeaturedServices',compact('FeaturedServices'),compact('FeaturedService'));
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
        $update = FeaturedServices::findOrFail($id);

        if ($request->hasFile('image')) {

            //Storage::delete('public/images/services/'.$update->image);
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $path= $request->file('image')->storeAs('public/images/services/', $image_name);
            $update->image = $image_name;

        }   
        $update->title = $request['title'];
        $update->description = $request['description'];

        $update->save();             
        return redirect('/Dashboard/FeaturedServices/')->with('success', 'Service Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = FeaturedServices::find($id);

        if(Storage::delete('public/images/services/'.$image->image)){
            $image->delete();
            return redirect('/Dashboard/FeaturedServices')->with('success', 'Service Deleted');
        }
    }
}
