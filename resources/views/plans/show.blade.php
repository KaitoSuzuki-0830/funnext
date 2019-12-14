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
    <div class="col-md-6"></div>
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
