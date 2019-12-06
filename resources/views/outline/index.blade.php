@extends('layouts.app')
@section('content')
<img src="https://images.unsplash.com/photo-1525026198548-4baa812f1183?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1233&q=80" alt="" width="1500px" height="500px">
<div class="input-group bg-dark text-white p-2">
    {{-- Search box  --}}
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <form action="/outlinesearch" method="get">
          <div class="input-group">
              <input type="search" name="search" class="form-control">
              <span class="input-group-prepend">
                  <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
              </span>
          </div>
        </form>
    </div>
    <div class="col-md-1"></div>
</div>
<div class="row">
    <div class="col-md-10"><h3>グループ</h3></div>
    <div class="col-md-2"><a href="{{route('groups.index')}}"><h5>See all</h5></a></div>
</div>

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
    <a href="{{route('group.join',['groupid'=>$group->id,'userid'=>$user->id])}}" class="btn btn-success btn-sm text-reset" role="button"><i class="fas fa-plus-circle fa-1x">Join</i></a>
  </div>
</div>
@endforeach
<hr>
<div class="row">
    <div class="col-md-10"><h3>Category</h3></div>
    <div class="col-md-2"><a href="{{route('category.index')}}"><h5>See all</h5></a></div>
</div>
@foreach($categories as $category)
    <div class="d-inline-block">
        <div class="card-deck" style="width:19rem;">
            <a href="{{route('category.show',['id'=>$group->id])}}" class="card">
                <img src="{{ $category->featured}}" alt="{{ $category->name}}" class="card-img" height="150px" width="150px">
                <div class="card-img-overlay">
                    <p class="card-text"><i class="fas fa-users"></i> Group's count</p>
                </div>
            </a>
        </div>
        <h6 class="font-weight-bolder">{{$category->name}}</h6>
    </div>
@endforeach
@endsection
