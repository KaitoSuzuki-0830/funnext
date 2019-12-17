<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Relaccum</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                width: 100%
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

            .links a {
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
        <div id="app">
            @include('inc.navbar')
        </div>
        <div class="welcometitletext">
        <h2>世界が変わってサッカーはライブ配信でより身近で見ることが簡単になった。</h2>
        <h2>だから週末は部屋で応援している。だけど何かが足りない。</h2>
        <h2>もし、この情熱と感動を分かち合える仲間と観れたら、</h2>
        <h2>僕はもっとサッカーにハマるに違いない。</h2>
        </div>
        {{-- class="aboutsubtitle1" class="aboutsubtitle2" class="aboutsubtitle3" class="aboutsubtitle4" --}}
    </body>
</html>
