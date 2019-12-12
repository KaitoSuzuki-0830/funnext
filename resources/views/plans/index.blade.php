@extends('layouts.app')
@section('content')
<div class="container">
<div class="card-body">
    <div class="row">
        <div class="col-md-6"><h1>イベント</h1></div>
        <div class="col-md-6">
            <form action="/plansearch" method="get">
                <div class="input-group">
                    <i class="fas fa-search" id="searchicon"></i>
                    <input type="search" name="search" class="form-control" placeholder="プラン名で検索" id="searchbox">
                </div>
            </form>
        </div>
    </div>
    @if(count($plans) > 0)
     <table class="table table-bordered">
     <thead>
        <tr>
          <th>タイトル</th>
          <th>場所</th>
          <th>値段</th>
          <th>詳細</th>
          <th>削除</th>
         </tr>
     </thead>
     <tbody>

      @foreach($plans as $plan)
        <tr>
           <td>{{ $plan->title}}</td>
           <td>{{ $plan->place}}</td>
           <td>¥ {{$plan->price}}</td>
           <td><a href="{{ route('plans.show',['id'=>$plan->id])}}" class="btn btn-primary"><i class="far fa-eye"></i></a></td>
           <td>
             <form action="{{ route('plans.destroy',['id' => $plan->id])}}" method="post">
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
</div>
@endsection
