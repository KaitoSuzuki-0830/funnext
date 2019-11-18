@extends('layouts.app')

@section('title','board.Add')

@section('menubar')
 @parent
 投稿ページ
@endsection

@section('content')
    <table>
     <form action="/board/add" method="post">
        {{ csrf_field() }}
        <tr><th>ユーザーID:</th>
            <td><input type="number" name="user_id"></td>
        </tr>
        <tr><th>タイトル:</th>
            <td><input type="text" name="title"></td>
        </tr>
        <tr><th>メッセージ:</th>
            <td><input type="text" name="message"></td>
        </tr>
        <tr><th></th>
            <td><input type="submit" value="送信"></td>
        </tr>
     </form>
    </table>
@endsection

@section('footer')
copyright 2019 relaccum.
@endsection
