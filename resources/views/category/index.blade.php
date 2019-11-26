@extends('layouts.app')
@section('content')

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
      <th colspan="2"><a href="{{ route('category.create')}}" class="btn btn-success"><i class="fas fa-plus"></i>　追加</a></th>


     </tr>
    </thead>
    <tbody>
     @foreach($categories as $category)
      <tr>
          <td>category image</td>
          <td>{{ $category->name}}</td>
          <td>groups list</td>
          <td><a href="{{ route('category.edit',['id'=>$category->id])}}" class="btn btn-secondary"><i class="fas fa-edit"> 編集</i></a></td>
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
@endsection
