@extends('layouts.app')
@section('content')
<div class="input-group bg-dark text-white p-2">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <div class="input-group md-form form-sm form-1 p-1">
         <div class="input-group-prepend">
            <span class="input-group-text cyan lighten-2" id="basic-text1"><i class="fas fa-search text-white"
            aria-hidden="true"></i></span>
         </div>
            <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
        </div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-1">
        <a href="{{route('groups.index')}}" class="btn btn-success" role="button">グループ</a>
    </div>
    <div class="col-md-1">
        <a href="{{route('plans.index')}}" class="btn btn-danger" role="button">イベント</a>
    </div>
</div>
<hr>
  <h3>グループ一覧</h3>
  @foreach($groups as $group)
  <div class="card-deck" style="width:20rem;">
  <a href="{{route('groups.index')}}" class="card">
    <img src="{{asset($group->featured)}}" class="card-img" alt="{{$group->title}}" height="200px" width="33%">
    <div class="card-img-overlay">
        <div class="card-title"><h3>{{$group->name}}</h3></div>
        <p class="card-text">members</p>
        <p class="card-text"><i class="fas fa-tag"></i>{{$group->category->name}}</p>
    </div>
  </a>
</div>
  @endforeach
@endsection
