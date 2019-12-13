@extends('layouts.app')
@section('content')
<div class="container-fluid" id="about0">
    <a href="#about1" id="abouttitle">Relaccum</a>
    <a href="#about2" id="abouttitle">できること</a>
    <a href="#about3" id="abouttitle">探す</a>
    <a href="#about4" id="abouttitle">Follow Us</a>
</div>
<div class="container-fluid" id="about1">
    <div class="row">
        <div class="col-md-6">
            <img src="uploads/logo/relaccumtitle.png" width="100%">
        </div>
        <div class="col-md-6">
            <h1 class="about1text">Relation(関係)＋Accum(蓄積)</h1>
            <p class="about1subtext">Relaccumとは、新しい関係がたくさん溜まっているサービスです。</p>
            <p class="about1subtext2">さあ、新しい関係を始めてみましょう！</p>
        </div>
    </div>
</div>
<div class="container-fluid" id="about2">
    <div class="container">
        <div class='abouttitle'>
            <h1>サービス説明</h1>
        </div>
        <div class="rolecontent">
            <img src="uploads/logo/チームのフリーアイコン.png">
            <h2 class="rolename">グループ</h2>
            <p>美術館に行く、新しい食べ物を試す、ハイキングに行く、地ビールツアーに参加、または、ただ新しい友達に会いに出かける</p>
        </div>
        <div class="rolecontent">
                <img src="uploads/logo/タグアイコン.png">
                <h2 class="rolename">カテゴリー</h2>
                <p>美術館に行く、新しい食べ物を試す、ハイキングに行く、地ビールツアーに参加、または、ただ新しい友達に会いに出かける</p>
        </div>
        <div class="rolecontent">
                <img src="uploads/logo/風船アイコン3.png">
                <h2 class="rolename">イベント</h2>
                <p>美術館に行く、新しい食べ物を試す、ハイキングに行く、地ビールツアーに参加、または、ただ新しい友達に会いに出かける</p>
        </div>
    </div>
</div>
<div class="container-fluid" id="about3">
    <div class="container">
        <div class='abouttitle'>
            <h1>Relaccumを始める</h1>
        </div>
        <div class="indexrole">
            <img src="uploads/logo/search.png" class="starticon">
            <h2 class="rolename">見つける</h2>
            <p>あなたが興味のあるコトをグループ、カテゴリー、イベントから探してみましょう。</p>
        </div>
        <div class="indexrole">
            <img src="uploads/logo/プラス.png" class="starticon">
            <h2 class="rolename">始める</h2>
            <p>あなたが興味のあるコトをグループ、カテゴリー、イベントから作ってみましょう。</p>
        </div>
    </div>
</div>
<div class="container-fluid" id="about4">
</div>
@endsection
