@extends('layouts.app')
@section('content')
<div class="card-body">
    <h1>グループ一覧</h1>
    @if(count($groups) > 0)
     <table class="table table-bordered">
     <thead>
        <tr>
          <th width="100">イメージ</th>
          <th width="100">タイトル</th>
          <th width="100">詳細</th>
          <th width="100">削除</th>
        </tr>
     </thead>
     <tbody>

    @foreach($groups as $group)
        <tr>
           <td　width="100"><img src="{{ $group->featured }}" alt="{{ $group->name }}" height="80px" width="100px;"></td>
           <td width="100">{{ $group->name}}</td>
           <td width="100"><a href="{{ route('groups.show',['id'=>$group->id])}}" class="btn btn-primary"><i class="far fa-eye"></i></a></td>
           <td width="100">
             <form action="{{ route('groups.destroy',['id' => $group->id])}}" method="groups">
               @csrf
               @method('DELETE')
               <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
             </td>
        </tr>
       @endforeach
     </tbody>
     </table>
  @else
     <P class ="text-center">グループはありません</p>
  @endif
  </div>
  </div>
 @endsection

