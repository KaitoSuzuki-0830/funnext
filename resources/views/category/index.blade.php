@extends('layouts.app')
@section('content')

<div class="card">
 <div class="card-header">すべてのグループ</div>
 <div class="card-body">
  @if(count($categories) >0)
   <table class="table table-bordered">
    <thead>
     <tr>
      <th>Name</th>
      <th></th>
     </tr>
    </thead>
    <tbody>
     @foreach($categories as $category)
      <tr>
          <td>{{ $category->name}}</td>
          <td><a href="{{ route('category.edit',['id'=>$category->id])}}" class="btn btn-info">Edit</a></td>
          <td>
            <form action="{{ route('category.destroy',['id'=>$category->id])}}" method="post">
             @csrf
             @method('DELETE')
             <button class="btn btn-danger">DELETE</i></button>
            </form>
          </td>
      </tr>
     @endforeach
    </tbody>
   </table>
 @else
  <p class="text-center">カテゴリーはありません</p>
 @endif
 </div>
</div>
@endsection
