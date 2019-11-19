@extends('layouts.app')
@section('content')

<div class="card">
 <div class="card-header">プロフィール編集</div>
 <div class="card-body">
     @if(count($errors)>0)
      <ul class="list-group">
     @foreach($errors->all() as $error)
       <li class="list-group-item text-danger">{{ $error}}</li>
     @endforeach
      </ul>
 @endif
 <form action="{{ route('profile.update')}}" method="post" enctype="multipart/form-data">
 @csrf
 @method('PUT')
 <div class="form-group">
    <label for="avatar">プロフィール写真を変更</label>
    <input type="file" name="avatar" class="form-control">
</div>
 <div class="form-group">
     <label for="username">ユーザー名</label>
     <input type="text" name="name" class="form-control" value="{{$user->name}}">
 </div>
 <div class="form-group">
    <label for="email">Eメールアドレス</label>
    <input type="text" name="email" class="form-control" value="{{$user->email}}">
</div>
<div class="form-group">
    <label for="password">新しいパスワード</label>
    <input type="password" name="password" class="form-control">
</div>
<div class="form-group">
    <label for="place">場所</label>
    @foreach ($prefectures as $pref)
    <select name="prefecture" id="pref_id">{{$pref}}</select>
    @endforeach
</div>
<div class="form-group">
    <label for="about">自己紹介</label>
    <textarea name="about" id="about" cols="6" rows="6" class="form-control">{{ $user->profile->about}}</textarea>
</div>
<div class="form-group">
    <label for="fb"><i class="fab fa-facebook-square" style="color:blue"></i>Facebook</label>
    <input type="text" name="facebook" class="form-control" value="{{ $user->profile->facebook}}">
</div>
<div class="form-group">
    <label for="tw"><i class="fab fa-twitter" style="color:aqua"></i>Twitter</label>
    <input type="text" name="twitter" class="form-control" value="{{ $user->profile->twitter}}">
</div>
<div class="form-group">
    <label for="In"><i class="fas fa-link"></i>Webリンク</label>
    <input type="text" name="weblink" class="form-control" value="{{ $user->profile->instagram}}">
</div>
<div class="form-group text-center">
    <button type="submit" class="btn btn-success btn-sm">プロフィールを更新する</button>
</div>
 </form>
 </div>
</div>
@endsection
