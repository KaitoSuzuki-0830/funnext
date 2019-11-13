@extends('layouts.app')
@section('content')
 <div class="card">
     <div class="card-header">グループを作成</div>
     <div class="card-body">
     @if(count($errors)>0)
        <ul class="list-group">
         @foreach($errors->all() as $error)
          <li class="list-group-item text-danger">{{ $error}}</li>
         @endforeach
        </ul>
    @endif
    <form action="{{ route('groups.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
     <label for="name">グループ名</label>
     <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
     <label for="description">グループ説明</label>
     <textarea name="description" id="ck-editor" cols="10" rows="10"></textarea>
    </div>
    <div class="form-group">
     <label for="category">カテゴリーを選択してください</label>
     <select name="category_id" class="form-control">
       @foreach ($categories as $category)
        <option value="{{ $category->id}}">{{ $category->name }}</option>
        @endforeach
     </select>
    </div>
    <div class="form-group">
        <label for="featured">グループ写真</label>
        <input type="file" name="featured" class="form-control">
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-success btn-block">グループを作成</button>
    </div>
    </form>
     </div>
 </div>
@endsection
