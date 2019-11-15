@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">お問い合わせ</div>
                <div class="panel-body">
                    {{-- エラーの表示 --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!! contact::open(['url' => 'contact/confirm',
                                'class' => 'form-horizontal']) !!}

                    <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                        {!! contact::label('type', 'お問い合わせ種類:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            @foreach($types as $key => $value)
                                <label class="checkbox-inline">
                                    {!! contact::checkbox('type[]', $value) !!}
                                    {{ $value }}
                                </label>
                            @endforeach
                            @if ($errors->has('type'))
                                <span class="help-block">
                                <strong>{{ $errors->first('type') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! contact::label('name', 'お名前:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! contact::text('name', null, ['class' => 'form-control']) !!}

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! contact::label('email', 'メールアドレス:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! contact::email('email', null, ['class' => 'form-control']) !!}
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                        {!! contact::label('gender', '性別:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            @foreach($genders as $key => $value)
                                <label class="checkbox-inline">
                                    {!! contact::radio('gender', $value) !!}
                                    {{ $value }}
                                </label>
                            @endforeach
                            @if ($errors->has('gender'))
                                <span class="help-block">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                        {!! contact::label('body', '内容:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! contact::textarea('body', null, ['class' => 'form-control']) !!}
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                        {!! contact::label('gender', '性別:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            @foreach($genders as $key => $value)
                                <label class="checkbox-inline">
                                    {!! contact::radio('gender', $value) !!}
                                    {{ $value }}
                                </label>
                            @endforeach
                            @if ($errors->has('gender'))
                                <span class="help-block">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                        {!! contact::label('body', '内容:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! contact::textarea('body', null, ['class' => 'form-control']) !!}
                            @if ($errors->has('body'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            {!! contact::submit('確認', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>

                    {!! contact::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
