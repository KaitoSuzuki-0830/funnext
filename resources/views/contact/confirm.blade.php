@extends('layouts.app')

@section('content')
<div class="container" id="shortcontent7">
<div class="card">
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
            type="hidden"
            class="form-control">
        </div>
        <div class="form-group">
        <label>タイトル</label>
            {{ $inputs['title'] }}
        <input
            name="title"
            value="{{ $inputs['title'] }}"
            type="hidden"
            class="form-control">
        </div>
        <div class="form-group">
        <label>お問い合わせ内容</label>
            {!! nl2br(e($inputs['body'])) !!}
        <input
            name="body"
            value="{{ $inputs['body'] }}"
            type="hidden"
            class="form-control">
        </div>
        <div class="row">
        <div class="form-group">
        <button type="submit" name="action" value="back" class="btn btn-secondary">
            <i class="fas fa-long-arrow-alt-left"></i> 修正する
        </button>
        </div>
        <div class="form-group">
        <button type="submit" name="action" value="submit" class="btn btn-primary">
            <i class="far fa-paper-plane"></i> 送信する
        </button>
        </div>
    </div>
    </form>
</div>
</div>
</div>
@endsection
