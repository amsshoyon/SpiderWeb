<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Works;
use App\Http\Requests\WorksRequest;

class WorksController extends Controller
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
        $Works = Works::get();
        return view('dashboard.Works')->with(compact('Works'));  
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
    public function store(WorksRequest $request)
    {
        $image_name = time().'.'.$request->image->getClientOriginalExtension();

        // Uplaod image
        $path= $request->file('image')->move(public_path('/images/works'), $image_name);

        $store = new Works;
        $store->title = $request->input('title');
        $store->catagory = $request->input('catagory');
        $store->description = $request->input('description');
        $store->image = $image_name;

        $store->save();

        return redirect('/Dashboard/Works/')->with('success', 'Work Added');
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
        $Work = Works::find($id);
        $Works = Works::get();
        return view('dashboard.Works',compact('Works'),compact('Work'));
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
        $update = Works::findOrFail($id);
        if ($request->hasFile('image')) {

            if(file_exists(public_path('/images/works/'.$update->image))){
                File::delete('/images/works/'.$update->image);
            }

            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $path= $request->file('image')->move(public_path('/images/works'), $image_name);
            $update->image = $image_name;

        }
        $update->title = $request['title'];
        $update->description = $request['description'];

        $update->save();             
        return redirect('/Dashboard/Works/')->with('success', 'Work Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Works::find($id);
        if(unlink(public_path('/images/works/'.$image->image))){
            $image->delete();
            return back()->with('success', 'Work Deleted');
        }
    }
}
