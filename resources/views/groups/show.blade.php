@extends('layouts.app')
@section('content')
<body>
    <div class="row">
        <div class="col-sm-8">
            <img src="{{ secure_asset('uploads/groups/'.$group->featured)}}" alt="{{ $group->title }}" height="350px" width="100%">
        </div>
        <div class="col-sm-4">
            <h1>{{ $group->name}}</h1>
            <p><i class="fas fa-user"></i> {{ $group->user->name}}</p>
            <p><i class="fas fa-tag"></i> {{ $group->category->name}}</p>
            <p><i class="fas fa-home"></i> {{ $group->created_at}}</p>
            <p></p>
            <p>Share: <i class="fab fa-facebook fa-3x"style="color:blue"></i>   <i class="fab fa-twitter fa-3x" style="color:aqua"></i></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-8">
            <a href="#"　class="text-center">グループ概要</a>
            <p>{{ $group->description}}</p>
        </div>
        <div class="col-sm-4">
            <a href="{{ route('plans.create')}}"><i class="fas fa-plus"> イベント作成</i></a>
            <p><a href="{{ route('plans.index')}}"><i class="fas fa-list"> イベント一覧</i></a></p>
        </div>
    </div>
    <hr>

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
