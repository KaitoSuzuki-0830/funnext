@extends('layouts.app')
@section('content')
<div class="input-group bg-dark text-white p-3">
    <div class="col-md-2"></div>
    <div class="col-md-6 p-2">
        <input type="text"  placeholder="グループ検索" >
    </div>
    <div class="col-md-2">
        <button type="submit" class="btn btn-success">グループ</button>
    </div>
    <div class="col-md-2">
        <button type="submit" class="btn btn-danger">イベント</button>
    </div>
</div>
<div class="card-body">
  <h3>グループ一覧</h3>
  @foreach($groups as $group)
  <div class="card ">
    <img src="{{asset($group->featured)}}" class="card-img" alt="{{$group->title}}" height="300px" width="33%">
    <div class="card-img-overlay">
        <h5 class="card-title">{{$group->name}}</h5>
        <p class="card-text">members</p>
        <p class="card-text"><i class="fas fa-tag"></i> {{$group->category->name}}</p>
    </div>
  @endforeach
  </div>
</div>
@endsection
