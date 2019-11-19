<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePlanRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Plan;
use App\Category;
use App\User;


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
                                  ->with('categories',Category::all());
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
        $plan->slug = str_slug($request->name);
        $plan->description = $request->description;
        $plan->price = $request->price;
        $plan->pref_id = $request->pref_id;
        $plan->category_id = $request->category_id;
        $plan->user_id = Auth::user()->id;

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/plans/',$featured_new_name);
        $plan->featured = secure_asset('uploads/plans/'.featured_new_name);

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
        return view('plans.show')->with('plan',$plan)
                                ->with('user',Auth::user());
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
                                ->with('categories',Category::all());
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
        Session::flash('success','企画を更新しました');

        return redirect(route('plans.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $paln)
    {
        $paln->delete();
        Session::flash('success','企画を削除しました');
        return redirect(route('plans.index'));
    }
    public function trashed(){
        $plans= Plan::onlyTrashed()->get();
        return view('plans.trash')->with('plans',$plans);
     }

     public function restore($id){
         $Plan = Plan::withTrashed()->where('id',$id)->first();
         $Plan->restore();
         Session::flash('success','Plan Restored successfully');
         return redirect(route('plans.index'));
     }

     public function kill($id){
         $Plan = Plan::withTrashed()->where('id',$id)->first();
         $Plan->forceDelete();
         Session::flash('success','Plan Deleted Permanently successfully');
         return redirect(route('plans.trashed'));
     }
}
