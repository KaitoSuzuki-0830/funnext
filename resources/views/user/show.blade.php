@extends('layouts.app')
@section('content')
  @foreach ($socialAccounts as $provider => $account)
    @if (isset($account['link']) && $account['link'])
    <a href="{{ $account['link'] }}" target="_blank" rel="noopener noreferrer">
        @if ($provider === 'twitter')
            <i class="fab fa-twitter-square fa-2x"></i>
        @else
            {{ $provider }}
        @endif
            </a>
        @endif
  @endforeach
@endsection
