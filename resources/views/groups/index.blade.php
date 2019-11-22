@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <img src="" alt="image">
</div>
    <div class="card-body">
    <h3>グループ一覧</h3>
    @foreach($groups as $group)
    <div class="card bg-dark text-white">
        <img src="{{asset($groups->featured)}}" class="card-img" alt="{{$groups->title}}" height="300px" width="33%">
        <div class="card-img-overlay">
            <h5 class="card-title">{{$groups->name}}</h5>
            <p class="card-text">members</p>
            <p class="card-text"><i class="fas fa-tag"></i> {{$categories->name}}</p>
        </div>
    @endforeach
    </div>
    </div>
@endsection
