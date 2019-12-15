@extends('layouts.app')
@section('content')
<div class="container-fluid" id="about0">
    <a href="#about1" id="abouttitle">Relaccum</a>
    <a href="#about2" id="abouttitle">コミニティー</a>
    <a href="#about3" id="abouttitle">ポリシー</a>
    <a href="#about4" id="abouttitle">始める</a>
    <a href="#about5" id="abouttitle">シェア</a>
</div>
<div class="container-fluid" id="about1">
    <div class="row">
        <div class="col-md-6">
            <img src="uploads/logo/relaccumtitle.png" width="100%" id="logoimage">
        </div>
        <div class="col-md-6">
            <h1 class="about1text">Relation(関係)＋Accum(蓄積)</h1>
            <p class="about1subtext">Relaccumとは、新しい関係がたくさん溜まっていくサービスです。</p>
            <p class="about1subtext2">あなたが求めている関係がきっとあります！</p>
            <h2 class="abou1go">さあ、新しい関係を始めてみましょう！</h2>
        </div>
    </div>
</div>
<div class="container-fluid" id="about2">
    <div class="container">
        <h1 class='abouttitle'>コミニティー説明</h1>
        <div class="rolecontent">
            <img src="uploads/logo/チームのフリーアイコン.png">
            <h2 class="rolename">グループ</h2>
            <p>グループとは同じ趣味や目的を持ったユーザーが集まって作られるものです。グループを作ることで新規ユーザーが参加しやすくなります。</p>
        </div>
        <div class="rolecontent">
                <img src="uploads/logo/タグアイコン.png">
                <h2 class="rolename">カテゴリー</h2>
                <p>カテゴリーはユーザーが興味、関心があることをワードにしたものです。カテゴリーからグループやイベントを探すことができます。</p>
        </div>
        <div class="rolecontent">
                <img src="uploads/logo/風船アイコン3.png">
                <h2 class="rolename">イベント</h2>
                <p>イベントとはユーザーが提案した企画です。グループから提案されたもの、グループに入っていない「その他」から提案されたものの2つがあります。</p>
        </div>
    </div>
</div>
<div class="container-fluid" id="about3">
    <div class="container">
            <h1 class="policytitle">ポリシー</h1>
            <div class="policycontent">
                    <img src="uploads/logo/履歴書アイコン1.png">
                    <h2 class="rolename">プロフィール</h2>
                    <p>あなたがどのような人物かを判断するにはプロフィール欄を記入していただく必要があります。</p>
            </div>
            <div class="policycontent">
                <img src="uploads/logo/おこづかいアイコン2.png">
                <h2 class="rolename">オンライン決済</h2>
                <p>ユーザーがより安心してイベントに参加できるためイベント費用はすべてオンライン決済で取引を完結するサービスとなっております。</p>
            </div>
            <div class="policycontent">
                <img src="uploads/logo/タイマーアイコン.png">
                <h2 class="rolename">イベントキャンセル</h2>
                <p>イベント実行日の3日前までは全額返金し、イベント実行日の前日までは半額返金なります。また、トラブルの原因となりますのでイベント代表者などにキャンセルすることをお伝えください。</p>
            </div>
            <div class="policycontent">
                <img src="uploads/logo/仲間.png">
                <h2 class="rolename">ユーザー</h2>
                <p>サービス上ではすべて掲示板を採用しておりますので、すべてのユーザーが会話を見ることができますので他者の誹謗、中傷は禁止です。</p>
            </div>
            <div class="policycontent">
                <img src="uploads/logo/パンチアイコン1.png">
                <h2 class="rolename">トラブル</h2>
                <p>ユーザー間でトラブルが起きた場合は、直ちに「<a href="/contact" class="policylink">Contact</a>」からお知らせください。また、解決がスムーズになるように現状説明などを「お問い合わせ内容」に具体的にお書きください。</p>
            </div>
    </div>
</div>
<div class="container-fluid" id="about4">
    <div class="container">
        <h1 class="abouttitle">Relaccumを始める</h1>
        <div class="indexrole">
            <img src="uploads/logo/search.png" class="starticon">
        </div>
        <div class="indexrole">
            <h2 class="rolename">見つける</h2>
            <p class="rolesubtext">あなたが興味のあるコトをグループ、カテゴリー、イベントから探してみましょう。</p>
            <a href="" class="indexlink">グループから探す</a>
            <a href="" class="indexlink">カテゴリーから探す</a>
            <a href="" class="indexlink">イベントから探す</a>
        </div>
        <div class="indexrole">
            <img src="uploads/logo/プラス.png" class="starticon">
        </div>
        <div class="indexrole">
            <h2 class="rolename">始める</h2>
            <p class="rolesubtext">あなたが興味のあるコトをグループ、カテゴリー、イベントから作ってみましょう。</p>
            <a href="" class="indexlink">グループを作る</a>
            <a href="" class="indexlink">カテゴリーを作る</a>
            <a href="" class="indexlink">イベントを作る</a>
        </div>
    </div>
</div>
<div class="container-fluid" id="about5">
    <div class="container">
        <h1 class='snstitle'>Follow Relaccum</h1>
        <ul id="snslist">
            <li class="snscontent">
                <a href="https://www.facebook.com/profile.php?id=100043318232181" class="snsicon"><i class="fab fa-facebook fa-4x my-example"></i></a>
                <h2 class="snsname">Facebook</h2>
            </li>
            <li class="snscontent">
                <a href="https://twitter.com/Sakigake830" class="snsicon"><i class="fab fa-twitter fa-4x my-example"></i></a>
                <h2 class="snsname">Twitter</h2>
            </li>
            <li class="snscontent">
                <a href="https://www.instagram.com/suzukai_kaito830/?hl=ja" class="snsicon"><i class="fab fa-instagram fa-4x my-example"></i></a>
                <h2 class="snsname">Instagram</h2>
            </li>
        </ul>
    </div>
</div>
@endsection
