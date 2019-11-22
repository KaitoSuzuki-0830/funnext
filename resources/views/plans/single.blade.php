@extends('layouts.app')
@section('content')

<div class="card">
 <div class="card-header">イベント　一覧</div>
 <div class="card-body">
     @if(count($plans)>0)
     <table class="table-table-border">
      <thead>
          <tr>
              <th>写真</th>
              <th>タイトル</th>
              <th colspan="2"></th>
          </tr>
      </thead>
     </table>
    @foreach($plans as $plan)
    <tr>
        <td> <img src="{{ asset('uploads/planss/'.$plans->featured)}}" alt="{{ $plans->title }}" height="90px" width="90px"style="border-radius: 80%"></td>
        <td>{{ $plans->title}}</td>
        <td><a href="{{ route('plans.show',['id'=>$plans->id])}}" class="btn btn-primary"><i class="far fa-eye"></i></a></td>
        <td>
            <form action="{{ route('plans.destroy',['id' => $plan->id])}}" method="plans">
             @csrf
             @method('DELETE')
             <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    @else
      <P class ="text-center">No plans found.</p>
    @endif
 </div>
</div>
@endsection
