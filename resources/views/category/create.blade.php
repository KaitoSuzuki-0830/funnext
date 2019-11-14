@extends('layouts.app')
@section('content')
 <div class="card">
   <div class="card-header">{{ isset($category)?'カテゴリーを編集':'カテゴリーを作成'}}</div>
   <div class="card-body">
    @if(count($errors)>0)
     <ul class="list-group">
      @foreach($errors->all() as $error)
       <li class="list-group-item text-danger">{{ $error}}</li>
      @endforeach
     </ul>
    @endif
     <form action="{{ isset($category)? route('category.update',['id'=>$category->id]): route('category.store') }}" method="post">
      @csrf
      @if(isset($category))
       @method('PUT')
      @endif
      <div class="form-group">
        <label for="name">カテゴリー名</label>
        <input type="text" name="name" class="form-control" value={{ isset($category)? $category->name :''}}>
      </div>
      <div class="form-group text-center">
        <button type="submit" class="btn btn-success btn-lg">
         {{ isset($category)?'カテゴリーを編集': 'カテゴリーを作成'}}
        </button>
      </div>
     </form>
   </div>
 </div>
@endsection
