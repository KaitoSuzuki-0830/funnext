@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">お問い合わせ</div>
    <div class="card-body">
            <form method="POST" action="{{ route('contact.confirm') }}">
                    @csrf

            <div class="form-group">
            <label>メールアドレス</label>
                    <input
                        name="email"
                        value="{{ old('email') }}"
                        type="text">
                    @if ($errors->has('email'))
                        <p class="error-message">{{ $errors->first('email') }}</p>
                    @endif
            </div>
            <div class="form-group">
                    <label>タイトル</label>
                    <input
                        name="title"
                        value="{{ old('title') }}"
                        type="text">
                    @if ($errors->has('title'))
                        <p class="error-message">{{ $errors->first('title') }}</p>
                    @endif
            </div>
            <div class="form-group">
                    <label>お問い合わせ内容</label>
                    <textarea name="body">{{ old('body') }}</textarea>
                    @if ($errors->has('body'))
                        <p class="error-message">{{ $errors->first('body') }}</p>
                    @endif
            </div>
            <div class="form-group text-center">
                    <button type="submit">
                        入力内容確認
                    </button>
                </div>
            </form>
    </div>
</div>

@endsection
