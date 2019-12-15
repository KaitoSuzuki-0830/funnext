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
        <div id="map" style="height:550px; width: 100%; margin:2rem auto 0;"></div>
                <div id="map_info">
                  <p id="venue">東京スカイツリー</p>
                  <p id="address">〒131-0045 東京都墨田区押上１−１−２</p>
                  <p id="url"><a href="http://www.tokyo-skytree.jp/" target="_blank">www.tokyo-skytree.jp</a></p>
                  <p id="zoom">17</p>
                </div>
                <div id="map_container">
                  <div id="map_canvas"></div>
                </div>
                <!-- jQuery の読み込み -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script>
                function initMap() {
                  jQuery(function($){
                    var map, map_center;
                    //初期のズーム レベル（指定がなければ 16）
                    var zoom = $("#zoom").text() ?  parseInt($("#zoom").text()): 16;
                    //マーカーのタイトル
                    var title = $('#venue').text();

                    //マップ生成のオプション
                    //center は Geolocation から取得して後で設定
                    var opts = {
                      zoom: zoom,
                      mapTypeId: "roadmap"  //初期マップ タイプ
                    };

                    //マップのインスタンスを生成
                    map = new google.maps.Map(document.getElementById("map_canvas"), opts);

                    //ジオコーディングのインスタンスの生成
                    var geocoder = new google.maps.Geocoder();

                    var address = $('#address').text();
                    var my_reg = /〒\s?\d{3}(-|ー)\d{4}/;
                    //郵便番号を含めるとおかしくなる場合があったので、郵便番号は削除
                    address = address.replace(my_reg, '');

                    //geocoder.geocode() にアドレスを渡して、コールバック関数を記述して処理
                    geocoder.geocode( { 'address': address}, function(results, status) {
                      if (status === 'OK' && results[0]) {
                        //results[0].geometry.location に緯度・経度のオブジェクトが入っている
                        map_center = results[0].geometry.location;
                        //地図の中心位置を設定
                        map.setCenter(map_center);
                        //マーカーのインスタンスを生成
                        var marker = new google.maps.Marker({
                          //マーカーを配置する Map オブジェクトを指定
                          map: map,
                          //マーカーの初期の場所を示す LatLng を指定
                          position: map_center,
                          //マーカーをアニメーションで表示
                          animation: google.maps.Animation.DROP,
                          title: title
                        });

                        //情報ウィンドウに表示するコンテンツを作成
                        //urlが指定してあればリンクつきのタイトルと住所を表示（URLがない場合もあるため）
                        var url = $("#url a").attr('href');
                        var content;
                        if (url) {
                          content = '<div id="map_content"><p><a href="' + url + '" target="_blank"> ' + title + '</a><br />' + address + '</p></div>';
                        }else {
                          //urlが指定してなければ、リンクなしのタイトルと住所を表示
                          content = '<div id="map_content"><p>' + title + '<br />' + address + '</p></div>';
                        }

                        //情報ウィンドウのインスタンスを生成
                        var infowindow = new google.maps.InfoWindow({
                          content: content,
                        });

                        //marker をクリックすると情報ウィンドウを表示(リスナーの登録）
                        google.maps.event.addListener(marker, 'click', function() {
                          //第2引数にマーカーを指定して紐付け
                          infowindow.open(map, marker);
                        });
                      } else {
                        alert("住所から位置の取得ができませんでした。: " + status);
                      }
                    });
                  });
                }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
                <!-- YOUR_API_KEYの部分は取得した APIキーで置き換えます。 -->
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
