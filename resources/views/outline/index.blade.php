@extends('layouts.app')
@section('content')
<main>
<div class="input-group bg-blue text-white p-2">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <form action="/search" method="get">
          <div class="input-group">
              <input type="search" name="search" class="form-control">
              <span class="input-group-prepend">
                  <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
              </span>
          </div>
        </form>
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
    <a href="{{route('groups.show',['id'=>$group->id])}}" class="card">
    <img src="{{asset($group->featured)}}" class="card-img" alt="{{$group->name}}" height="200px" width="200px">
    <div class="card-img-overlay">
        <div class="card-title"><h3>{{$group->name}}</h3></div>
        <p class="card-text"><i class="fas fa-users"></i> members</p>
        <p class="card-text"><i class="fas fa-tag"></i>{{$group->category->name}}</p>
        <p class="card-text"><i class="fas fa-plus-circle fa-2x"></i></p>
    </div>
    </a>
    </div>
</div>
@endforeach
<hr>
<h3>Category list</h3>
@foreach($categories as $category)
    <div class="d-inline-block">
        <div class="card-deck" style="width:24rem;">
            <a href="" class="card">
                <img src="#" alt="#" class="card-img" height="200px" width="200px">
                <div class="card-img-overlay">
                    <h3>{{$category->name}}</h3>
                    <p class="card-text"><i class="fas fa-users"></i> Group's count</p>
                </div>
            </a>
        </div>
    </div>
@endforeach
</main>
<footer>
    <div class="input-group bg-dark text-white p-2">

    </div>

</footer>
@endsection
