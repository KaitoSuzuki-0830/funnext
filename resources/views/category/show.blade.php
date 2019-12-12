@extends('layouts.app')
@section('content')
<body>
    <div class="container">
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
</body>
@endsection
