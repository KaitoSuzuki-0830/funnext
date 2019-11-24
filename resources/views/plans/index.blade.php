@extends('layouts.app')
@section('content')
<div class="card-body">
    @if(count($plans) > 0)
     <table class="table table-bordered">
     <thead>
        <tr>
          <th>イメージ</th>
          <th>タイトル</th>
          <th colspan="2"></th>
         </tr>
     </thead>
     <tbody>

      @foreach($plans as $plan)
        <tr>
           <td> <img src="{{ asset('uploads/plans/'.$plan->featured)}}" alt="{{ $plan->title }}" height="90px" width="90px"style="border-radius: 80%"></td>
           <td>{{ $plan->title}}</td>
           <td><a href="{{ route('plans.show',['id'=>$plan->id])}}" class="btn btn-primary"><i class="far fa-eye"></i></a></td>
           <td>
             <form action="{{ route('plans.destroy',['id' => $plan->id])}}" method="plan">
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
