@extends('layouts.app')

@section('content')
<div class="container"　id="shortcontent8">
<h1>{{ __('送信完了') }}</h1>
<p>お問い合わせありがとうございました。すぐにご対応させていただきます。</p>
<a href="{{ route('outline.index')}}" class="btn btn-success" id="originalbutton"><i class="fas fa-arrow-left">ホームへ戻る</i></a>
</div>
@endsection
