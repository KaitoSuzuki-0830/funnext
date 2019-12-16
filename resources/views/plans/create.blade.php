@extends('layouts.app')
@section('content')
<div class="container">
 <div class="card">
  <div class="card-header" id="themetitle">イベントを作成</div>
  <div class="card-body">
  @if(count($errors) >0)
     <ul class="list-group">
       @foreach($errors->all() as $error)
        <li class="list-group-item text-danger">{{ $error}}</li>
      @endforeach
      </ul>
  @endif
   <form action="{{ route('plans.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
     <label for="title">タイトル</label>
     <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
            <label for="featured">イベント写真</label>
            <input type="file" name="featured" >
    </div>
    <div class="form-group">
     <label for="description">イベント説明</label>
     <textarea name="description" rows="10" cols="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
            <label for="date">イベント日時</label>
            <input type="text" id="input_date" class="form-control">
        </div>
    <div class="form-group">
        <label for="price">参加費（１人当り)</label>
        <input type="text" name="price" class="form-control">
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-1"><label for="name">場所1:</label></div>
            <div class="col-sm-2">
                <select name="pref_id" class="form-control">
                @foreach ($prefectures as $pref)
                <option value="{{$pref->id}}">{{$pref->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="col-sm-1"><label for="place">場所2:</label></div>
            <div class="col-sm-8">
                <input type="text" name="place" class="form-control" placeholder="具体的な住所を貼り付けてください">
            </div>
        </div>
    </div>
    <div class="form-group">
     <label for="group">グループを選択してください</label>
     <select name="group_id" class="form-control">
        @foreach ($groups as $group)
            <option value="{{ $group->id}}">{{ $group->name }}</option>
        @endforeach
     </select>
    </div>
    <div class="form-group text-right">
        <a href="{{route('groups.create')}}">グループがない時は...</a>
    </div>
    <div class="form-group">
     <label for="category">カテゴリーを選択してください</label>
     <select name = "category_id" class="form-control">
         @foreach ($categories as $category)
            <option value="{{ $category->id}}">{{ $category->name }}</option>
        @endforeach
     </select>
    </div>
    <div class="form-group text-right">
        <a href="{{route('category.create')}}">カテゴリーがございませんか?</a>
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-success btn-lg">イベント作成</button>
    </div>
</form>
</div>
</div>
</div>
@endsection
