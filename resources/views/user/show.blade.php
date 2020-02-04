@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">My Page</div>
    </div>
    <div class="card-body">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-3">
                        <img src="{{ isset($user)? secure_asset($user->profile->avatar): Auth::user()->profile->avatar}}"  height="60px" width="60px" style="border-radius: 50%" class="profile-image img-circle">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>{{$user->name}}</h2>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
