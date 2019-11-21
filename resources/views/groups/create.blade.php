@extends('layouts.app')
@section('content')
 <div class="card">
     <div class="card-header">グループを作成しましょう</div>
     <div class="card-body">
     @if(count($errors)>0)
        <ul class="list-group">
         @foreach($errors->all() as $error)
          <li class="list-group-item text-danger">{{ $error}}</li>
         @endforeach
        </ul>
    @endif
    <form action="{{ route('groups.store')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
     <label for="name">グループ名</label>
     <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
     <label for="description">グループ説明</label>
     <textarea name="description"  cols="10" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
     <label for="category">カテゴリーを選択してください</label>
     <select name="category_id" class="form-control">
       @foreach($categories as $category)
            <option value="{{ $category->id}}">{{ $category->name }}</option>
        @endforeach
     </select>
     <div class="form-group">
         <a href="{{route('category.create')}}">カテゴリーがございませんか?</a>
     </div>
    </div>
    <form action="{{ url('/images')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        {{ csrf_field()}}
    <div class="form-group">
        <label for="featured">グループ写真</label>
        <input type="file" name="featured" id="image" class="form-control">
    </div>
    <div class="form-group"><button type="submit" class="btn btn-primary">Uploard</button></div>
    </form>
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-success btn-lg">グループを作成</button>
    </div>
    </form>
     </div>
 </div>
@endsection
