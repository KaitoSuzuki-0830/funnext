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
    <label for="username">場所</label>
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
    <label for="about">自己紹介</label>
    <textarea name="about" id="about" cols="6" rows="6" class="form-control">{{ $user->profile->about}}</textarea>
</div>
<div class="form-group">
    <label for="fb">Facebook</label>
    <input type="text" name="facebook" class="form-control" value="{{ $user->profile->facebook}}">
</div>
<div class="form-group">
    <label for="In">Instagram</label>
    <input type="text" name="instagram" class="form-control" value="{{ $user->profile->instagram}}">
</div>
<div class="form-group">
    <label for="tw">Twitter</label>
    <input type="text" name="twitter" class="form-control" value="{{ $user->profile->twitter}}">
</div>
 </form>
 </div>
</div>
@endsection
