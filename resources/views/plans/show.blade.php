@extends('layouts.app')
@section('content')

<div class="card">
 <div class="card-header">plan Details</div>
 <div class="card-body">
    <h5 class="card-title">{{ $plan->title}}</h5>
    <img src="{{ asset('uploads/plans/'.$plan->featured)}}" alt="{{ $plan->title }}" height="250px" width="100%">
    <p class="card-text">{{ $plan->description}}</p>
    <div class="float-left">
        <a href="{{ route('plans.edit',['id'=>$plan->id])}}" class="btn btn-info"><i class="far fa-edit"></i></a>

    </div>
  </div>
 </div>

@endsection
