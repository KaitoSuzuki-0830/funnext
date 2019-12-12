@extends('layouts.app')
@section('content')
<div class="container">
<div class="card">
 <div class="card-header">すべてのカテゴリー</div>
 <div class="card-body">
  @if(count($categories) >0)
   <table class="table table-bordered">
    <thead>
     <tr>
      <th>イメージ</th>
      <th>カテゴリー名</th>
      <th>グループ一覧</th>
      <th><a href="{{ route('category.create')}}" class="btn btn-success"><i class="fas fa-plus"></i>　追加</a></th>


     </tr>
    </thead>
    <tbody>
     @foreach($categories as $category)
      <tr>
          <td><img src="{{ $category->featured }}" alt="{{ $category->name }}" height="100px" width="100px;"></td>
          <td>{{ $category->name}}</td>
          <td><a href="#" class="btn btn-info"><i class="fas fa-list-ul"></i> groups list</a></td>
          <td>
            <form action="{{ route('category.destroy',['id'=>$category->id])}}" method="post">
             @csrf
             @method('DELETE')
             <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> 削除</button>
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
</div>
@endsection
