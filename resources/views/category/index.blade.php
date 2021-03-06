@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6"><h1>カテゴリー</h1></div>
            <div class="col-md-6">
                <form action="/categorysearch" method="get">
                    <div class="input-group">
                        <i class="fas fa-search" id="searchicon"></i>
                        <input type="search" name="search" class="form-control" placeholder="カテゴリー名で検索" id="searchbox">
                    </div>
                </form>
            </div>
        </div>
  @if(count($categories) >0)
   <table class="table table-bordered" id="tableposition">
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
          <td><a href="{{route('category.show',['id'=>$category->id])}}" class="btn btn-info"><i class="fas fa-list-ul"></i> groups list</a></td>
          <td>
            {{-- <form action="{{ route('category.destroy',['id'=>$category->id])}}" method="post">
             @csrf
             @method('DELETE')
             <button class="btn btn-danger"><i class="fas fa-trash-alt"></i> 削除</button>
            </form> --}}
          </td>
      </tr>
     @endforeach
    </tbody>
   </table>
 @else
  <h2 class="text-center">カテゴリーはありません</h2>
 @endif
 </div>
</div>
</div>
@endsection
