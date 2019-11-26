<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateGroupRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\group;
use App\plan;
use Illuminate\Support\Facades\Storage;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $groups = group::all();
        return view('groups.index')->with('groups',$groups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.create')->with('user',Auth::user())
                                    ->with('categories',Category::all())
                                    ->with('plans',Plan::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGroupRequest $request)
    {
        $group = new group;
        $group->name = $request->name;
        $group->slug = str_slug($request->name);
        $group->description = $request->description;
        $group->category_id = $request->category_id;
        $group->user_id = Auth::user()->id;

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        // $filePath = 'images/'.$featured_new_name;
        // Storage::disk('s3')->put($filePath,file_get_contents($featured));
        $featured->move('uploads/groups/',$featured_new_name);
        $group->featured = secure_asset('uploads/groups/'.$featured_new_name);

        $group->save();

        $group->plans()->attach($request->plan_id);

        Session::flash('success','新しいグループを作成しました！');
        return redirect(route('groups.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(group $group)
    {
        return view('groups.show')->with('group',$group)
                                  ->with('user',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(group $group)
    {
        return view('groups.edit')->with('group',$group)
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
    public function update(CreateGroupRequest $request,group $group)
    {
        $group->name = $request->name;
        $group->slug = str_slug($request->name);
        $group->description = $request->description;
        $group->category_id = $request->category_id;
        if($request->hasFile('featured')){
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/groups/',$featured_new_name);
            $group->featured = $featured_new_name;
        }

        $group->save();

        $group->plans()->sync($request->plan);

        Session::flash('success','グループを更新しました');

        return redirect(route('groups.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(group $group,$image)
    {
        $group->delete();
        Storage::disk('s3')->delete('images/'.$image);
        Session::flash('success','グループを削除しました');
        return redirect(route('groups.index'));
    }


}
