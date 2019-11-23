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
        <button type="submit" class="btn btn-success">グループ</button>
    </div>
    <div class="col-md-1">
        <button type="submit" class="btn btn-danger">イベント</button>
    </div>
</div>
<div class="card-body">
  <h3>グループ一覧</h3>
  @foreach($groups as $group)
  <div class="card ">
    <img src="{{asset($group->featured)}}" class="card-img" alt="{{$group->title}}" height="200px" width="33%">
    <div class="card-img-overlay">
        <h5 class="card-title">{{$group->name}}</h5>
        <p class="card-text">members</p>
        <p class="card-text"><i class="fas fa-tag"></i> {{$group->category->name}}</p>
    </div>
  @endforeach
  </div>
</div>
@endsection
