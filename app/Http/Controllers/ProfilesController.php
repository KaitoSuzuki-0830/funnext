<?php

namespace App\Http\Controllers;

use App\Prefecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\group;
use App\Plan;


class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('user.profile')->with('user',Auth::user())
                                ->with('prefecture',Prefecture::all())
                                ->with('groups',group::all())
                                ->with('plans',Plan::all());
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
        return view('user.show')->with('user',Auth::user())
                                ->with('prefecture',Prefecture::all())
                                ->with('plans',$plans)
                                ->with('groups',$groups);
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
    public function update(Request $request)
    {
        $this->validate(request(),[
            'name' =>'required',
            'email'=>'required|email',
        ]);

        $user = Auth::user();

        if($request->hasFile('avatar')){
            $avatar = $request->avatar;
            $avatar_new_name = time().$avatar->getClientOriginalName();
            $avatar->move('uploads/avatar/',$avatar_new_name);
            $user->profile->avatar = secure_asset('uploads/avatar/'.$avatar_new_name);
            $user->profile->save();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->profile->place = $request->pref;
        $user->profile->about = $request->about;
        $user->profile->facebook = $request->facebook;
        $user->profile->instagram = $request->instagram;
        $user->profile->twitter = $request->twitter;

        $user->save();
        $user->profile->save();

        if($request->has('password')){
            $user->password = bcrypt($request->password);
            $user->save();
        }

        Session::flash('success','プロフィールを更新しました');
        return redirect()->back();
    }

}
