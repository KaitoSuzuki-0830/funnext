@extends('layouts.app')
@section('content')
<div class="container-fluid" id="outlinepage">
    <img src="uploads/photo/outline.jpg" id="outlineimage">
    <h1 class="pagestitle">最高のイベントを探そう！</h1>
</div>
<div class="container">
    <div class="input-group">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div id="outlinesearchbox">
                <form action="/outlinesearch" method="get">
                    <div class="input-group">
                        <i class="fas fa-search" id="searchicon"></i>
                        <input type="search" name="search" class="form-control" placeholder="イベント,カテゴリー,グループ名で検索" id="searchbox">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
        <h2 class="titlename">イベント</h2>
        <div class="row">
            <div class="col-md-6"><h5>もうすぐ開催のイベントをチェック</h5></div>
            <div class="col-md-6"></div>
        </div>
    {{-- @foreach($plans as $plan)
    <div class="d-inline-block">
        <div class="card text-center" style="width: 20rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $plan->title}}</h5>
              <p class="card-text" id="eventplace"><i class="fas fa-map-marker-alt"></i> {{ $plan->place }}</p>
              <a href="{{route('plans.show',['id'=>$plan->id])}}" class="btn btn-primary">詳細へ</a>
            </div>
        </div>
    </div>
    @endforeach --}}
@foreach($plans as $plan)
<a href="{{ route('plans.show',['id'=>$plan->id])}}" id="planoverall">
<div class="d-inline-block" id="cardsize">
    <div class="card" style="width: 18rem;" id="outlineeventcard">
        <img src="{{asset($plan->featured)}}" class="card-img-top" alt="{{$plan->title}}">
        <div class="card-body" id="outlinecard">
          <h5 class="card-title" id="eventtitle">{{ $plan->title}}</h5>
          <table class="eventtableposition">
            <tr class="tablelist">
                <td><i class="far fa-clock"></i></td>
                <td>{{$plan->date}}</td>
            </tr>
            <tr class="tablelist">
                <td><i class="fas fa-users"></i></td>
                <td>5</td>
            </tr>
            <tr class="tablelist">
                <td><i class="fas fa-hand-holding-usd"></i></td>
                <td>¥{{$plan->price}}</td>
            </tr>
          </table>
          <a href="{{ route('plans.show',['id'=>$plan->id])}}" class="btn btn-info"　role="button" id="showbutton">Details</a>
        </div>
      </div>
</div>
</a>
           {{-- <td><a href="{{route('plan.join',['planid'=>$plan->id,'userid'=>$user->id])}}" class="btn btn-danger" role="button" id="planjoin">Join</a></td> --}}
    @endforeach
    <a href="{{route('plans.index')}}" class="btn btn-info" role="button" id="seemorebutton"><h5 class="seealltext">See all</h5></a>
    <hr>
    <h2 class="titlename">カテゴリー</h2>
        <div class="row">
            <div class="col-md-6"><h5>興味のあるトピックからイベントを検索</h5></div>
            <div class="col-md-6"></div>
        </div>
    @foreach($categories as $category)
    <div class="d-inline-block" id="onecard">
        <div class="card-deck" style="width:18rem;">
            <a href="{{route('category.show',['id'=>$category->id])}}" class="card" id="cardsize">
                <img src="{{ $category->featured}}" alt="{{ $category->name}}" class="card-img" height="150px" width="150px">
            </a>
        </div>
        <h5 class="row justify-content-center" id="cardname">{{$category->name}}</h5>
    </div>
    @endforeach
    <a href="{{route('category.index')}}" class="btn btn-info" role="button" id="seemorebutton2"><h5 class="seealltext">See all</h5></a>
</div>

{{-- <div class="container" id="groupposition">
    <h2>グループ</h2>
    <div class="row">
        <div class="col-md-5">
            <h5>あなたが惹かれるグループを見つけよう</h5>
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-2">
            <a href="{{route('groups.index')}}"　id="seeallcolor"><h5>すべて見る</h5></a>
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
    <a href="{{route('group.join',['groupid'=>$group->id,'userid'=>$user->id])}}" class="btn btn-danger btn-sm text-reset" role="button"><i class="fas fa-plus-circle fa-1.5x">参加</i></a>
  </div>
</div>
@endforeach
</div> --}}
@endsection
