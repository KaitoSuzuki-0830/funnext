<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FunNext</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links  a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

        </style>
    </head>
    <body>
        <div class="container-fluid" id="welcomepage">
            <img src="uploads/logo/titleimage.jpg" id="titleimage"　height="600" width="100%">
            <a href="{{route('outline.index')}}" id="logoposition"><h2 id="servicename">FunNext</h2></a>
            <h2 id="titletext">ここなら、この情熱と感動が共感できる。</h2>
            <a class="btn btn-info btn-lg" role="button" href="/register" id="welcomebutton"><i class="fas fa-sign-in-alt"></i> Start</a>
            <a class="btn btn-info btn-lg" role="button" href="{{route('outline.index')}}" id="welcomebutton2"><i class="fas fa-search"></i> Search</a>
        </div>
        <div class="container-fluid" id="welcomecon1">
            <div class="container">
                <h2 id="welcome1">FunNext</h2>
                <p class="welcomedescription">誰でもカンタンにイベントに参加しサッカーが好きな人との新しい出会いがあります。</p>
                <p class="welcomedescription">また、あなた自身で試合観戦などのイベントを企画することもできます。</p>
                <p class="welcomedescription">リアルで集まって大好きなサッカーを一緒に楽しめることができるサービスです。</p>
            </div>
        </div>
        <div class="container-fluid" id="welcomecon2">
            <div class="container" >
            <h1 class='welcometitle2'>Community</h1>
            <div class="rolecontent">
                <img src="uploads/logo/チームのフリーアイコン.png">
                <h2 class="rolename">グループ</h2>
                <p class="welcometext">グループとは同じ趣味や目的を持ったユーザーが集まって作られるものです。グループを作ることで新規ユーザーが参加しやすくなります。</p>
            </div>
            <div class="rolecontent">
                    <img src="/uploads/logo/タグアイコン.png">
                    <h2 class="rolename">カテゴリー</h2>
                    <p class="welcometext">カテゴリーはユーザーが興味、関心があることをワードにしたものです。カテゴリーからグループやイベントを探すことができます。</p>
            </div>
            <div class="rolecontent">
                    <img src="uploads/logo/風船アイコン3.png">
                    <h2 class="rolename">イベント</h2>
                    <p class="welcometext">イベントとはユーザーが提案した企画です。グループから提案されたもの、グループに入っていない「その他」から提案されたものの2つがあります。</p>
            </div>
            </div>
        </div>
        <div class="container-fluid" id="welcomecon3">
        <div class="container">
            <h1 class='welcometitle'>How to Use</h1>
            <div class="usestep">
                <div class="tipsicon">
                <img src="uploads/logo/tip1.png" class="tipsimage">
                </div>
                <img src="uploads/logo/履歴書アイコン1.png">
                <h2 class="rolename">アカウント作成</h2>
                <p class="welcometext">まず、あなたのアカウントを作りましょう。登録は<a href="/register" id="createacount">こちら</a>から</p>
            </div>
            <div class="usestep">
                <div class="tipsicon">
                <img src="uploads/logo/tip2.png" class="tipsimage">
                </div>
                <img src="uploads/logo/風船アイコン3.png">
                <h2 class="rolename">イベントを探す</h2>
                <p class="welcometext">お近くのイベントを探してみましょう。カテゴリーやグループからもイベントを探すことができます。</p>
            </div>
            <div class="usestep">
                <div class="tipsicon">
                <img src="uploads/logo/tip3.png" class="tipsimage">
                </div>
                <img src="uploads/logo/おこづかいアイコン2.png">
                <h2 class="rolename">お支払い</h2>
                <p class="welcometext">イベントの参加費をオンライン決済で支払うことでイベント参加が完了します。</p>
            </div>
        </div>
        </div>
        <div class="container-fluid" id="welcomecon4">
            <div class="container">
                <h1 class='welcometitle2'>Let's Start</h1>
                <div class="indexrole">
                    <img src="uploads/logo/search.png" class="starticon">
                    <h2 class="rolename">見つける</h2>
                    <p class="welcometext">あなたが興味のあるコトをイベント、カテゴリー、グループから探してみましょう。</p>
                    <a href="{{route('category.index')}}" class="indexlink">カテゴリーから探す</a>
                    <a href="{{route('plans.index')}}" class="indexlink">イベントから探す</a>
                    <a href="{{route('groups.index')}}" class="indexlink">グループから探す</a>
                </div>
                <div class="indexrole">
                    <img src="uploads/logo/プラス.png" class="starticon">
                    <h2 class="rolename">始める</h2>
                    <p class="welcometext">あなたが興味のあるコトをイベント、カテゴリー、グループから作ってみましょう。</p>
                    <a href="{{route('plans.create')}}" class="indexlink">イベントを作る</a>
                    <a href="{{route('groups.create')}}" class="indexlink">グループを作る</a>
                    <a href="{{route('category.create')}}" class="indexlink">カテゴリーを作る</a>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="welcomecon5">
            <div class="container">
                <h1 class='welcometitle'>Follow Us</h1>
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
            @include('inc.footer')
    <script async  crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v5.0&appId=467764400530816&autoLogAppEvents=1"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
