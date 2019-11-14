@extends('layouts.app')
@section('content')
 <div class="card">
  <div class="card-header">グループ一覧</div>
  <div class="card-body">
    @if(count($groups)>0)
    <table class="table table-bordered">
     <thead>
      <tr>
        <th>写真</th>
        <th>グループ名</th>
        <th colspan="2"></th>
      </tr>
     </thead>
     <tbody>
         @foreach($groups as $group)
         <tr>
             <td><img src="{{ secure_asset('uploads/groups/'.$group->featured)}}" alt="{{ $group->name}}" height="90px" style="border-radius: 80%"></td>
             <td>{{ $group->name}}</td>
             <td><a href="{{ route('groups.show',['id'=>$group->id])}}" class="btn btn-primary"><i class="far fa-eye"></i></a></td>
             <td>
              <form action="{{ route('groups.destroy',['id'=>$group->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
              </td>
         </tr>
     @endforeach
     </tbody>
    </table>
    @else
     <p class="text-center">グループはありません</p>
    @endif
  </div>
 </div>
@endsection
