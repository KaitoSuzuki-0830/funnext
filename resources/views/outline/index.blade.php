@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="input-group text-white p-3" >
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="/outlinesearch" method="get">
              <div class="input-group">
                  <input type="search" name="search" class="form-control">
                  <span class="input-group-prepend">
                      <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                  </span>
              </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<div class="container" id="bottomsearch">
    <h3>Groups</h3>
    <a href="{{route('groups.index')}}"><h5>See all</h5></a>
@foreach($groups as $group)
  <div class="d-inline-block">
  <div class="card-deck" style="width:24.5rem;">
    <a href="{{route('groups.show',['id'=>$group->id])}}" class="card">
    <img src="{{asset($group->featured)}}" class="card-img" alt="{{$group->name}}" height="200px" width="200px">
    <div class="card-img-overlay">
        <div class="card-title"><h3>{{$group->name}}</h3></div>
        <p class="card-text"><i class="fas fa-users"></i> members</p>
        <p class="card-text"><i class="fas fa-tag"></i>{{$group->category->name}}</p>
    </div>
    </a>
  </div>
  <div class="row justify-content-center">
    <a href="{{route('group.join',['groupid'=>$group->id,'userid'=>$user->id])}}" class="btn btn-success btn-sm text-reset" role="button"><i class="fas fa-plus-circle fa-2x">Join</i></a>
  </div>
</div>
@endforeach
</div>
<hr>
<div class="container">
    <h3>Categories</h3>
    <a href="{{route('category.index')}}"><h5>See all</h5></a>
@foreach($categories as $category)
    <div class="d-inline-block">
        <div class="card-deck" style="width:19rem;">
            <a href="{{route('category.show',['id'=>$group->id])}}" class="card">
                <img src="{{ $category->featured}}" alt="{{ $category->name}}" class="card-img" height="150px" width="150px">
            </a>
        </div>
        <h5 class="row justify-content-center">{{$category->name}}</h5>
    </div>
@endforeach
</div>
@endsection
