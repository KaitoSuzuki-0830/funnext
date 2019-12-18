@extends('layouts.app')
@section('content')
<div class="container">
 <div class="card">
     <div class="card-header">グループ編集</div>
     <div class="card-body">
      @if(count($errors)>0)
       <ul class="list-group">
         @foreach($errors->all() as $error)
         <li class="list-group-item text-danger">{{ $error}}</li>
         @endforeach
       </ul>
    @endif
    <form action="{{ route('groups.update',['id'=>$post->id])}}" method="post" enctype="multipart/form-data">
     @csrf
     @method('PUT')
     <div class="form-group">
      <label for="name">グループ名</label>
      <input type="text" name="name" class="form-control" value="{{ $post->title}}">
     </div>
     <div class="form-group">
     <label for="description">グループ説明</label>
     <textarea name="description" id="" cols="10" rows="10" class="form-control">{{ $group->description}}</textarea>
     </div>
     <div class="form-group">
         <label for="category">カテゴリーを選択してください</label>
         <select name="category_id" class="form-control">
             @foreach ($categories as $category)
              <option value="{{ $category->id}}"
               @if($group->category_id == $category->id)
                selected
               @endif
               >{{ $category->name }}</option>
         </select>
     </div>
     <div class="form-group">
         <label for="featured">グループ写真</label>
         <input type="file" name="featured" class="form-control">
     </div>
     <div class="form-group text-center"></div>
        <button type="submit" class="btn btn-primary btn-block">グループを更新</button>
     </div>
    </form>
  </div>
 </div>
</div>
@endsection
