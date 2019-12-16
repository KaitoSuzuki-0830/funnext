<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\group;
use App\Category;
use App\User;
use App\Plan;
use Illuminate\Support\Facades\Auth;

class OutlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = group::take(3)->get();
        $categories = Category::take(4)->get();
        $user = User::find(Auth::id());
        $plans = Plan::take(4)->get();

        return view('outline.index')->with('groups',$groups)
                                    ->with('categories',$categories)
                                    ->with('user',$user)
                                    ->with('plans',$plans);
    }

     public function search(Request $request)
    {
        $search = $request->get('search');
        $groups = group::where('name','like','%'.$search.'%')->get();
        $user = User::find(Auth::id());
        $categories = Category::where('name','like','%'.$search.'%')->get();
        $plans = Plan::where('title','like','%'.$search.'%')->get();

        return view('outline.index')->with('groups',$groups)
                                    ->with('user',$user)
                                    ->with('categories',$categories)
                                    ->with('plans',$plans);

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
        //
    }
}
