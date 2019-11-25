@extends('layouts.app')
@section('content')
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm-8">
            <img src="{{ $group->featured }}" alt="{{ $group->title }}" height="200px" width="100%">
        </div>
        <div class="col-sm-4">
            <h1>{{ $group->name}}</h1>
            <p></p>
            <p><i class="fas fa-user"></i> {{ $group->user->name}}</p>
            <p><i class="fas fa-tag"></i> {{ $group->category->name}}</p>
            <p><i class="fas fa-home"></i> {{ $group->created_at}}</p>
            <p></p>
            <p><div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">シェア</a></div>
            </p>
        </div>
    </div>
    </div>
    <hr>
    <div class="row" height="20%" width="100%">
        <div class="col-sm-8">
            <a href="#">概要</a>
            <a href="{{ route('plans.index')}}">イベント</a>
            <a href="#">メンバー</a>
            <a href="#">会話</a>
            {{-- <i href="{{ route('plans.create')}}"><i class="fas fa-plus"> イベント作成</i></i> --}}
        </div>
        <div class="col-sm-4">
            <button type="submit" class="btn btn-danger" value="参加"></button>
            <button type="submit" class="btn btn-outline-secondary" value="..."></button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-8">
            <h5 class="text-center"><a href="#">グループ概要</a></h5>
            <p>{{ $group->description}}</p>
        </div>
        <div class="col-sm-4">
            <h6>代表者</h6>
            <p>{{ $group->user->name}}</p>
            <h6>メンバー(Count)<a href="#">一覧</a></h6>
            <p><i class="fas fa-users"></i></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-6">
            <h5>イベントリスト (Count)</h5>
            @foreach($plans as $plan)
            <div class="card-deck" style="width:100%;">
            <img src="{{ $plan->featured }}" class="card-img-top" alt="{{$plan->name}}">
            <div class="card-body">
            <div class="card-title"><h3>{{$plan->title}}</h3></div>
            {{-- <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{$plan->prefecture->name}}</p> --}}
            <p class="card-text"><i class="far fa-map"></i> {{$plan->place}}</p>
            <p class="card-text"><i class="fas fa-tag"></i>{{$group->category->name}}</p>
            <p class="card-text">{{$plan->description}}</p>
            <p class="card-text inline"><i class="fas fa-yen-sign"></i> {{$plan->price}}
                <form action="{{ route('pay') }}" method="POST">
                        {{ csrf_field() }}
                     <script
                         src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                         data-key="pk_test_EtHmYNmqSKAqc3JTRo7H98vx003VgTohui"
                         data-amount="{{$plan->price}}"
                         data-name="イベント参加"
                         data-label="お支払い"
                         data-description="Laravel-Myproduct.payment"
                         data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                         data-locale="auto"
                         data-currency="JPY">
                     </script>
                </form>
            </p>
    </div>
    </a>
    </div>
    </div>
@endforeach
        </div>
        <div class="col-sm-6">
            <a href="#">一覧</a>
        </div>
    </div>

</body>
     <div id="disqus_thread"></div>
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
@endsection
