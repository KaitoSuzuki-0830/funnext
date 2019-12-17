<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Plan;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::id());
        $plans = Plan::take(4)->get();

        return view('welcome.index')->with('groups',$groups)
                                    ->with('categories',$categories)
                                    ->with('user',$user)
                                    ->with('plans',$plans);
    }




}
