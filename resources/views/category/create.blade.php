@extends('layouts.app')
@section('content')
<div class="container">
 <div class="card">
   <div class="card-header">カテゴリーを作成しましょう</div>
   <div class="card-body">
    @if(count($errors)>0)
     <ul class="list-group">
      @foreach($errors->all() as $error)
       <li class="list-group-item text-danger">{{ $error}}</li>
      @endforeach
     </ul>
    @endif
     <form action="{{ route('category.store')}}" method="post" enctype="multipart/form-data">
     {{csrf_field()}}
      <div class="form-group">
        <label for="name">カテゴリー名</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
          <label for="featured">カテゴリー写真</label>
          <input type="file" name="featured" class="form-control">
      </div>
      <div class="form-group text-center">
          <button type="submit" class="btn btn-primary btn-lg">カテゴリーを作成</button>
      </div>
     </form>
   </div>
 </div>
</div>
@endsection
