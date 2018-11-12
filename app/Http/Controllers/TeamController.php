<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Team;
use App\Http\Requests\TeamRequest;

class TeamController extends Controller
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
         $TeamMembers = Team::get();
         return view('dashboard.Team')->with(compact('TeamMembers'));  
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
    public function store(TeamRequest $request)
    {
        $image_name = time().'.'.$request->image->getClientOriginalExtension();

        // Uplaod image
        $path= $request->file('image')->storeAs('public/images/team/', $image_name);

        // Upload Photo
        $store = new Team;
        $store->name = $request->input('name');
        $store->designation = $request->input('designation');
        $store->fb_link = $request->input('fb_link');
        $store->twitter_link = $request->input('twitter_link');
        $store->google_link = $request->input('google_link');
        $store->linkedin_link = $request->input('linkedin_link');
        $store->size = $request->file('image')->getClientSize();
        $store->image = $image_name;

        $store->save();

        return redirect('/Dashboard/Team/')->with('success', 'Member Added');
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
        $Team = Team::find($id);
        $TeamMembers = Team::get();
        return view('dashboard.Team',compact('TeamMembers'),compact('Team'));
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
        $update = Team::findOrFail($id);

        if ($request->hasFile('image')) {

            //Storage::delete('public/images/services/'.$update->image);
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $path= $request->file('image')->storeAs('public/images/team/', $image_name);
            $update->image = $image_name;

        }   
        $update->name = $request['name'];
        $update->designation = $request['designation'];
        $update->fb_link = $request['fb_link'];
        $update->twitter_link = $request['twitter_link'];
        $update->google_link = $request['google_link'];
        $update->linkedin_link = $request['linkedin_link'];

        $update->save();             
        return redirect('/Dashboard/Team/')->with('success', 'Member Information Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Team::find($id);

        if(Storage::delete('public/images/team/'.$image->image)){
            $image->delete();
            return redirect('/Dashboard/Team')->with('success', 'Member Deleted');
        }
    }
}
