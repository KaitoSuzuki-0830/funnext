@extends('layouts.app')
@section('content')
<div class="card">
 <div class="card-header">グループ詳細</div>
 <div class="card-body">
     <h5 class="card-title">{{ $group->name}}</h5>
     <img src="{{ secure_asset('uploads/groups/'.$post->featured)}}" alt="{{ $post->title }}" height="250px" width="100%">
     <p class="card-text">{{ $post->description}}</p>
     <div class="float-left">
         <a href="{{ route('groups.edit',['id'=>$post->id])}}" class="btn btn-info"><i class="far fa-edit"></i></a>
     </div>
 </div>
</div>
@endsection
