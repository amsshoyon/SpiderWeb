<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
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
        $id = auth()->user()->id;
        $User = User::find($id);
        return view('dashboard.EditProfile')->with(compact('User'));  
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
        //
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
        $User = User::find($id);
        return view('dashboard.EditProfile',compact('User'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, $id)
    {
        $update = User::findOrFail($id);
        if ($request->hasFile('image')) {

            
            $old_image = $update->image;
            if (!empty($old_image)) {
                Storage::delete('public/images/user/'.$old_image);
            }
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $path= $request->file('image')->storeAs('public/images/user/', $image_name);
            $update->image = $image_name;

        }   
        $update->name = $request['name'];
        $update->phone = $request['phone'];

        $update->save();             
        return redirect('/Dashboard/EditProfile')->with('success', 'Profile Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
