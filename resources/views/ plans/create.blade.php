@extends('layouts.app')
@section('content')
 <div class="card">
  <div class="card-header">Create plan</div>
  <div class="card-body">
  @if(count($errors) >0)
     <ul class="list-group">
       @foreach($errors->all() as $error)
        <li class="list-group-item text-danger">{{ $error}}</li>
      @endforeach
      </ul>
  @endif
   <form action="{{ route('plans.store')}}" method="plan" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
     <label for="title">Title</label>
     <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="featured">Featured</label>
        <input type="file" name="featured" class="form-control">
    </div>
    <div class="form-group">
     <label for="description">Description</label>
     <textarea name="description" id="ck-editor" rows="10" cols="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" name="price" class="form-control">
    </div>
    <div class="form-group">
        <label for="pref_id">場所を選択してください</label>
        <select name = "pref_id" class="form-control">
            @foreach ($prefectures as $prefecture)
               <option value="{{ $prefecture->id}}">{{ $prefecture->name }}</option>
           @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="place">場所2</label>
        <input type="text" name="place" class="form-control">
    </div>
    <div class="form-group">
     <label for="category">Select Category</label>
     <select name = "category_id" class="form-control">
         @foreach ($categories as $category)
            <option value="{{ $category->id}}">{{ $category->name }}</option>
        @endforeach
     </select>
    </div>
    <div class="form-group text-center">
     <button type="submit" class="btn btn-success btn-block">Create plan</button>
    </div>
    </form>
  </div>
</div>
@endsection
