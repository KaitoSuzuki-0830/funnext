@extends('layouts.app')

@section('content')
<div class="card-header">お問い合わせ(確認）</div>
<div class="card-body">
    <form method="POST" action="{{ route('contact.send') }}">
        @csrf
        <div class="form-group">
        <label>メールアドレス</label>
            {{ $inputs['email'] }}
        <input
            name="email"
            value="{{ $inputs['email'] }}"
            type="hidden">
        </div>
        <div class="form-group">
        <label>タイトル</label>
            {{ $inputs['title'] }}
        <input
            name="title"
            value="{{ $inputs['title'] }}"
            type="hidden">
        </div>
        <div class="form-group">
        <label>お問い合わせ内容</label>
            {!! nl2br(e($inputs['body'])) !!}
        <input
            name="body"
            value="{{ $inputs['body'] }}"
            type="hidden">
        </div>
        <div class="form-group">
        <button type="submit" name="action" value="back">
            入力内容修正
        </button>
        </div>
        <div class="form-group">
        <button type="submit" name="action" value="submit">
         送信する
        </button>
        </div>
    </form>
</div>
@endsection
