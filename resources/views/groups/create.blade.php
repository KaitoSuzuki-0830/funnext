@extends('layouts.app')
@section('content')
<div class="container">
 <div class="card">
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
     <div class="form-group text-right">
            <a href="{{route('category.create')}}">カテゴリーがございませんか?</a>
    </div>
    </div>
    <div class="form-group">
            <label for="plan">イベントを選択してください</label>
            <select name="plan_id"  multiple class="form-control">
              @foreach($plans as $plan)
                   <option value="{{ $plan->id}}">{{ $plan->title }}</option>
               @endforeach
            </select>
            <div class="form-group text-right">
                <a href="{{route('plans.create')}}">イベントを作りますか?</a>
            </div>
    </div>
    <div class="form-group">
        <label for="featured">グループ写真</label>
        <input type="file" name="featured" class="form-control">
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-success btn-lg">グループを作成</button>
    </div>
    </form>
     </div>
 </div>
</div>
@endsection
