@extends('layouts.app')
@section('content')
 <div class="card">
  <div class="card-header">Edit plan</div>
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
     <label for="title">Title</label>
     <input type="text" name="title" class="form-control" value="{{ $plan->title}}">
    </div>
    <div class="form-group">
     <label for="description">Description</label>
     <textarea name="description" id="" rows="10" cols="10" class="form-control">{{ $plan->description }}</textarea>
    </div>
    <div class="form-group">
            <label for="category">Select Category</label>
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
     <label for="featured">Featured Image</label>
     <input type="file" name="featured" class="form-control">
    </div>
    <div class="form-group text-center">
     <button type="submit" class="btn btn-success btn-block">Update plan</button>
    </div>
    </form>
  </div>
</div>
@endsection