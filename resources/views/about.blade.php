@extends('layouts.app')
@section('content')
<div class="container-fluid" id="about0">
    <a href="#about1" id="abouttitle">Relaccum</a>
    <a href="#about2" id="abouttitle">できること</a>
    <a href="#about3" id="abouttitle">探す</a>
    <a href="" id="abouttitle">Follow Us</a>
</div>
<div class="container-fluid" id="about1">
    <div class="row">
        <div class="col-md-6">
            <img src="uploads/logo/relaccumtitle.png" width="100%">
        </div>
        <div class="col-md-6">
            <h1 class="about1text">Relaccum（関係)＋Accum（蓄積)</h1>
            <p class="about1subtext">Relaccumとは、新しい関係がたくさん溜まる場所です。</p>
            <p class="about1subtext2">さあ、新しい関係を作ってみましょう！</p>
        </div>
    </div>
</div>
<div class="container-fluid" id="about2">
    <div class="container">
        <h1 class='abouttitle'>できること</h1>
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
        <h1 class='abouttitle'>やりたいことを探す</h1>
        <div class="option"><img src="uploads/logo/サーチアイコン.png" class="iconabout3"></div>
        <div class="option"><h3>探す</h3></div>
        <div class="option"><img src="uploads/logo/プラスのアイコン素材.png" class="iconabout3"></div>
        <div class="option"><h3>作る</h3></div>
    </div>
</div>
@endsection
