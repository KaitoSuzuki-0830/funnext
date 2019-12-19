<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePlanRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Plan;
use App\Category;
use App\Prefecture;
use App\group;
use App\User;
use App\profile;

class PlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::all();
        return view('plans.index')->with('plans',$plans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plans.create')->with('user',Auth::user())
                                  ->with('categories',Category::all())
                                  ->with('groups',group::all())
                                  ->with('prefectures',Prefecture::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePlanRequest $request)
    {
        $plan = new Plan;
        $plan->title = $request->title;
        $plan->featured = $request->featured;
        $plan->slug = str_slug($request->title);
        $plan->description = $request->description;
        $plan->date = $request->date;
        $plan->price = $request->price;
        $plan->pref_id = $request->pref_id;
        $plan->place = $request->place;
        $plan->user_id = Auth::user()->id;
        $plan->category_id = $request->category_id;

        // $featured = $request->featured;
        // $featured_new_name = time().$featured->getClientOriginalName();
        // $featured->move('uploads/plans/',$featured_new_name);
        // $plan->featured = secure_asset('uploads/plans/'.$featured_new_name);

        $plan->save();

        Session::flash('success','新しい企画を作成しました!');
        return redirect(route('plans.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        $organiser = User::find($plan->user_id);
        // $ogavatar = Profile::find($plan->avatar);
        // ->with('avatar',$ogavatar)

        return view('plans.show')->with('plan',$plan)
                                ->with('organiser',$organiser);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        return view('plans.edit')->with('plan',$plan)
                                ->with('user',Auth::user())
                                ->with('categories',Category::all())
                                ->with('prefecture',Prefecture::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePlanRequest $request, Plan $plan)
    {
        $plan->title = $request->title;
        $plan->slug = str_slug($request->name);
        $plan->description = $request->description;
        $plan->date = $request->date;
        $plan->price = $request->price;
        $plan->pref_id = $request->pref_id;
        $plan->category_id = $request->category_id;
         if($request->hasFile('featured')){
             $featured = $request->featured;
             $featured_new_name = time().$featured->getClientOriginalName();
             $featured->move('uploads/plans/',$featured_new_name);
             $plan->featured = $featured_new_name;
         }

        $plan->save();
        Session::flash('success','イベントを更新しました');

        return redirect(route('plans.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        $plan->delete();
        Session::flash('success','イベントを削除しました');
        return redirect(route('plans.index'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $plans = plan::where('title','like','%'.$search.'%')->get();

        return view('plans.index')->with('plans',$plans);
    }

    public function join($planid,$userid){

        $plan = Plan::find($planid);
        $plan->users()->attach($userid);
        Session::flash('success','Joined successfully');
        return redirect()->route('outline.index');

    }

}
