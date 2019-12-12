@extends('layouts.app')
@section('content')
<div class="container">
<div class="card-body">
    <div class="row">
        <div class="col-md-4"><h1>グループ 一覧</h1></div>
        <div class="col-md-8">
                <form action="/groupsearch" method="get">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control" placeholder="グループ名で検索">
                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </span>
                    </div>
                </form>
        </div>
    </div>
    @if(count($groups) > 0)
     <table class="table table-bordered">
     <thead>
        <tr>
          <th>イメージ</th>
          <th>タイトル</th>
          <th>カテゴリー</th>
          <th>詳細</th>
          <th>削除</th>
        </tr>
     </thead>
     <tbody>

    @foreach($groups as $group)
        <tr>
           <td><img src="{{ $group->featured }}" alt="{{ $group->name }}" height="100px" width="100px;"></td>
           <td>{{ $group->name}}</td>
           <td>{{ $group->category->name}}</td>
           <td><a href="{{ route('groups.show',['id'=>$group->id])}}" class="btn btn-primary"><i class="far fa-eye"></i></a></td>
           <td>
             <form action="{{ route('groups.destroy',['id' => $group->id])}}" method="post">
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
</div>
 @endsection

