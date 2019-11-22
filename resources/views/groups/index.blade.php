@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <img src="find.jpg" alt="image">
</div>
<div class="input-group bg-dark text-white p-3">
    <input type="text" class="form-control" placeholder="グループ検索">
    <span class="input-group-btn">
        <button type="button" class="btn btn-default">ボタン</button>
    </span>
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
