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

<h3>グループ　一覧</h3>
@foreach($groups as $group)
  <div class="d-inline-block">
  <div class="card-deck" style="width:24rem;">
    <a href="{{route('groups.index',['id'=>$group->id])}}" class="card">
    <img src="{{asset($group->featured)}}" class="card-img" alt="{{$group->name}}" height="100%" width="100%">
    <div class="card-img-overlay">
        <div class="card-title"><h3>{{$group->name}}</h3></div>
        <p class="card-text">members</p>
        <p class="card-text"><i class="fas fa-tag"></i>{{$group->category->name}}</p>
    </div>
    </a>
    </div>
    </div>
@endforeach
<hr>
{{-- <h3>イベント　一覧</h3>
@foreach($plans as $plan)
  <div class="d-inline-block">
  <div class="card-deck" style="width:24rem;">
    <a href="{{route('plans.index',['id'=>$plan->id])}}" class="card">
    <img src="{{asset($plan->featured)}}" class="card-img" alt="{{$plan->title}}" height="100%" width="100%">
    <div class="card-img-overlay">
        <div class="card-title"><h3>{{$plan->title}}</h3></div>
        <p class="card-text"><i class="fas fa-tag"></i>{{$plan->category->name}}</p>
        <p class="card-text"><i class="fas fa-map-marker-alt"></i>{{$plan->prefecture->name}}</p>
        <p class="card-text"><i class="fas fa-yen-sign"></i>{{$plan->price}}</p>
    </div>
    </a>
    </div>
    </div>
@endforeach --}}

@endsection
