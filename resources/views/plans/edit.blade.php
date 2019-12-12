@extends('layouts.app')
@section('content')
<div class="container">
 <div class="card">
  <div class="card-header">イベントを編集</div>
  <div class="card-body">
  @if(count($errors) >0)
     <ul class="list-group">
       @foreach($errors->all() as $error)
        <li class="list-group-item text-danger">{{ $error}}</li>
      @endforeach
      </ul>
  @endif
   <form action="{{ route('plans.update',['id'=>$plan->id])}}" method="plan" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
     <label for="title">タイトル</label>
     <input type="text" name="title" class="form-control" value="{{ $plan->title}}">
    </div>
    <div class="form-group">
     <label for="description">イベント説明</label>
     <textarea name="description" id="" rows="10" cols="10" class="form-control">{{ $plan->description }}</textarea>
    </div>
    <div class="form-group">
            <label for="category">カテゴリーを選択</label>
            <select name = "category_id" class="form-control">
                @foreach ($categories as $category)
                   <option value="{{ $category->id}}"
                    @if($plan->category_id == $category->id)
                        selected
                    @endif
                    >{{ $category->name }}</option>
               @endforeach
            </select>
    </div>
    <div class="form-group">
     <label for="featured">イメージ写真</label>
     <input type="file" name="featured" class="form-control">
    </div>
    <div class="form-group text-center">
     <button type="submit" class="btn btn-success btn-block">更新する</button>
    </div>
    </form>
  </div>
</div>
</div>
@endsection
