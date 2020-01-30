<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\group;
use App\Category;
use App\User;
use App\Plan;
use App\Prefecture;
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
        $categories = Category::take(20)->orderBy('id','asc')->get();
        $user = User::find(Auth::id());
        $plans = Plan::take(3)->get();

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

}
