@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <img src="" alt="image">
    </div>
    <div>グループ一覧</div>
    <div class="card bg-dark text-white">
        <img src="{{ $group->featured}}" class="card-img" alt="featured">
        <div class="card-img-overlay">
            <h5 class="card-title">{{ $group->name}}</h5>
            <p class="card-text">members</p>
            <p class="card-text"><i class="fas fa-tag"></i> {{$categories->name}}</p>
        </div>
    </div>
@endsection
