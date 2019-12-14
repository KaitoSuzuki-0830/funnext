@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="input-group">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="/outlinesearch" method="get">
              <div class="input-group">
                <i class="fas fa-search" id="searchicon"></i>
                <input type="search" name="search" class="form-control" placeholder="グループ,カテゴリー,イベント名で検索" id="searchbox">
              </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<div class="container" id="groupposition">
    <h2>グループ</h2>
    <div class="row">
        <div class="col-md-2">
            <h5>グループ</h5>
        </div>
        <div class="col-md-8"></div>
        <div class="col-md-2">
            <a href="{{route('groups.index')}}"><h5>すべて見る</h5></a>
        </div>
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
    <a href="{{route('group.join',['groupid'=>$group->id,'userid'=>$user->id])}}" class="btn btn-success btn-sm text-reset" role="button"><i class="fas fa-plus-circle fa-1.5x">Join</i></a>
  </div>
</div>
@endforeach
</div>
<hr>
<div class="container">
    <h2>カテゴリー</h2>
        <div class="row">
            <div class="col-md-2"><h5>カテゴリー</h5></div>
            <div class="col-md-8"></div>
            <div class="col-md-2">
                <a href="{{route('category.index')}}"><h5>すべて見る</h5></a>
            </div>
        </div>
@foreach($categories as $category)
    <div class="d-inline-block">
        <div class="card-deck" style="width:19rem;">
            <a href="{{route('category.show',['id'=>$category->id])}}" class="card">
                <img src="{{ $category->featured}}" alt="{{ $category->name}}" class="card-img" height="150px" width="150px">
            </a>
        </div>
        <h5 class="row justify-content-center">{{$category->name}}</h5>
    </div>
@endforeach
</div>
<hr>
<div class="container">
    <h2>イベント</h2>
    <div class="row">
        <div class="col-md-2"><h5>イベント</h5></div>
        <div class="col-md-8"></div>
        <div class="col-md-2">
            <a href="{{route('plans.index')}}"><h5>すべて見る</h5></a>
        </div>
    </div>
@foreach($plans as $plan)
    <div class="card text-center" style="width: 24.5rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $plan->title}}</h5>
          <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{ $plan->place }}</p>
          <a href="{{route('plans.show',['id'=>$plan->id])}}" class="btn btn-primary">詳細へ</a>
        </div>
    </div>
@endforeach
</div>
@endsection
