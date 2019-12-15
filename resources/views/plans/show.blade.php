@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-6"><h2>イベント　詳細</h2></div>
    <div class="col-md-4"></div>
    <div class="col-md-1"><iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flaravel-myproduct.herokuapp.com%2Fplans%2F11&layout=button&size=large&appId=467764400530816&width=79&height=28" width="79" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></<iframe></div>
    <div class="col-md-1"><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-text="私はこのイベントに参加します！参加者、募集なう！！！" data-hashtags="relaccum #リレキューム　#Relaccum #イベント" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></<a></div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="card-title"><h3>{{$plan->title}}</h3></div>
                    <p class="card-text"><i class="fas fa-map-marker-alt"></i>　{{$plan->place}}</p>
                    <p class="card-text"><i class="fas fa-tag"></i> {{$plan->category->name}}</p>
                    <p class="card-text">{{$plan->description}}</p>
                    <p class="card-text"><i class="fas fa-yen-sign"></i> {{$plan->price}}
                        <form action="{{ route('pay') }}" method="POST">
                        {{ csrf_field() }}
                        <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="pk_test_EtHmYNmqSKAqc3JTRo7H98vx003VgTohui"
                            data-amount="{{$plan->price}}"
                            data-name="参加費を支払う"
                            data-label="参加する"
                            data-description="Laravel-Myproduct.payment"
                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                            data-locale="auto"
                            data-currency="JPY">
                        </script>
                        </form>
                    </p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
            <div id="gmap"></div><!-- 地図を表示する領域 -->

            <script>
            function initMap() {
              var target = document.getElementById('gmap');
              //マップを生成して表示
              var map = new google.maps.Map(document.getElementById('gmap'), {
                center: {lat: 40.748441, lng: -73.985616},
                zoom: 15
              });
              //情報ウィンドウのインスタンスの生成
              var infoWindow = new google.maps.InfoWindow;

              //ブラウザが Geolocation に対応しているかを判定
              //対応していない場合の処理
              if(!navigator.geolocation){
                //情報ウィンドウの位置をマップの中心位置に指定
                infoWindow.setPosition(map.getCenter());
                //情報ウィンドウのコンテンツを設定
                infoWindow.setContent('Geolocation に対応していません。');
                //情報ウィンドウを表示
                infoWindow.open(map);
              }

              //ブラウザが対応している場合、position にユーザーの位置情報が入る
              navigator.geolocation.getCurrentPosition(function(position) {
                //position から緯度経度（ユーザーの位置）のオブジェクトを作成し変数に代入
                var pos = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude
                };

                //DirectionsService のオブジェクトを生成
                var directionsService = new google.maps.DirectionsService();
                //DirectionsRenderer のオブジェクトを生成
                var directionsRenderer = new google.maps.DirectionsRenderer();
                //directionsRenderer と地図を紐付け
                directionsRenderer.setMap(map);

                // ルートを取得するリクエスト
                var request = {
                  origin: pos,      // 出発地点の緯度経度（ユーザーの位置）
                  destination: "Central Park",   // 到着地点
                  travelMode: 'TRANSIT',  //公共交通機関
                  transitOptions: {
                    modes: ['BUS'],  //バス
                    routingPreference: 'FEWER_TRANSFERS'  //乗換の少ないルート
                  },
                };

                //DirectionsService のオブジェクトのメソッド route() にリクエストを渡し、
                //コールバック関数で結果を setDirections(result) で directionsRenderer にセットして表示
                directionsService.route(request, function(result, status) {
                  //ステータスがOKの場合、
                  if (status === 'OK') {
                    directionsRenderer.setDirections(result); //取得したルート（結果：result）をセット
                  }else{
                    alert("取得できませんでした：" + status);
                  }
                });

              }, function() {  //位置情報の取得をユーザーがブロックした場合のコールバック
                //情報ウィンドウの位置をマップの中心位置に指定
                infoWindow.setPosition(map.getCenter());
                //情報ウィンドウのコンテンツを設定
                infoWindow.setContent('Error: Geolocation が無効です。');
                //情報ウィンドウを表示
                infoWindow.open(map);
              });
            }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9iATwHWcm3sUqBSZnJB3v1VMbV9_s6lw&callback=initMap" async defer></script><!-- YOUR_API_KEYの部分は取得した APIキーで置き換えます。 -->
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div id="disqus_thread">
            {{-- 　　ディスカッションページ --}}
                <script>
                       /**
                       *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                       *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                       /*
                       var disqus_config = function () {
                       this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                       this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                       };
                       */
                       (function() { // DON'T EDIT BELOW THIS LINE
                       var d = document, s = d.createElement('script');
                       s.src = 'https://myproduct.disqus.com/embed.js';
                       s.setAttribute('data-timestamp', +new Date());
                       (d.head || d.body).appendChild(s);
                       })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            {{-- 　　ディスカッションページ　ここまで --}}
        </div>
    </div>
</div>
</div>
@endsection
