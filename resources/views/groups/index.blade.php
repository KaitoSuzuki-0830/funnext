@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <img src="" alt="image">
</div>
    <div class="card-body">
    <div>グループ一覧</div>
    @foreach($groups as $group)
    <div class="card bg-dark text-white">
        <img src="{{$groups->featured}}" class="card-img" alt="featured">
        <div class="card-img-overlay">
            <h5 class="card-title">{{$groups->name}}</h5>
            <p class="card-text">members</p>
            <p class="card-text"><i class="fas fa-tag"></i> {{$categories->name}}</p>
        </div>
    @endforeach
    </div>
    </div>
@endsection
