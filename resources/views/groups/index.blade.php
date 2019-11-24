@extends('layouts.app')
@section('content')
<div class="card-body">
    @if(count($groups) > 0)
     <table class="table table-bordered">
     <thead>
        <tr>
          <th>イメージ</th>
          <th>タイトル</th>
          <th colspan="2"></th>
         </tr>
     </thead>
     <tbody>

    @foreach($groups as $group)
        <tr>
           <td><img src="{{ asset('uploads/groups/'.$groups->featured)}}" alt="{{ $groups->title }}" height="90px" width="90px"style="border-radius: 80%"></td>
           <td>{{ $group->title}}</td>
           <td><a href="{{ route('groups.show',['id'=>$groups->id])}}" class="btn btn-primary"><i class="far fa-eye"></i></a></td>
           <td>
             <form action="{{ route('groups.destroy',['id' => $groups->id])}}" method="groups">
               @csrf
               @method('DELETE')
               <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
             </td>
        </tr>
       @endforeach
     </tbody>
     </table>
  @else
     <P class ="text-center">イベントはありません</p>
  @endif
  </div>
  </div>
 @endsection

