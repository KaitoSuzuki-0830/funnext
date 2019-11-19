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
   <form action="{{ route('plans.store')}}" method="post" enctype="multipart/form-data">
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
        <select name="pref">
            <option value="">選択してください</option>
            <option value="北海道">北海道</option>
            <option value="青森県">青森県</option>
            <option value="岩手県">岩手県</option>
            <option value="宮城県">宮城県</option>
            <option value="秋田県">秋田県</option>
            <option value="山形県">山形県</option>
            <option value="福島県">福島県</option>
            <option value="茨城県">茨城県</option>
            <option value="栃木県">栃木県</option>
            <option value="群馬県">群馬県</option>
            <option value="埼玉県">埼玉県</option>
            <option value="千葉県">千葉県</option>
            <option value="東京都" selected>東京都</option>
            <option value="神奈川県">神奈川県</option>
            <option value="新潟県">新潟県</option>
            <option value="富山県">富山県</option>
            <option value="石川県">石川県</option>
            <option value="福井県">福井県</option>
            <option value="山梨県">山梨県</option>
            <option value="長野県">長野県</option>
            <option value="岐阜県">岐阜県</option>
            <option value="静岡県">静岡県</option>
            <option value="愛知県">愛知県</option>
            <option value="三重県">三重県</option>
            <option value="滋賀県">滋賀県</option>
            <option value="京都府">京都府</option>
            <option value="大阪府">大阪府</option>
            <option value="兵庫県">兵庫県</option>
            <option value="奈良県">奈良県</option>
            <option value="和歌山県">和歌山県</option>
            <option value="鳥取県">鳥取県</option>
            <option value="島根県">島根県</option>
            <option value="岡山県">岡山県</option>
            <option value="広島県">広島県</option>
            <option value="山口県">山口県</option>
            <option value="徳島県">徳島県</option>
            <option value="香川県">香川県</option>
            <option value="愛媛県">愛媛県</option>
            <option value="高知県">高知県</option>
            <option value="福岡県">福岡県</option>
            <option value="佐賀県">佐賀県</option>
            <option value="長崎県">長崎県</option>
            <option value="熊本県">熊本県</option>
            <option value="大分県">大分県</option>
            <option value="宮崎県">宮崎県</option>
            <option value="鹿児島県">鹿児島県</option>
            <option value="沖縄県">沖縄県</option>
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
