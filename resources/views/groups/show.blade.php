@extends('layouts.app')
@section('content')
<div class="card">
 <div class="card-body">
    <div class="row">
        <div class="col-sm-8">
            <img src="{{ secure_asset('uploads/groups/'.$group->featured)}}" alt="{{ $group->title }}" height="250px" width="100%">
        </div>
        <div class="col-sm-4">
            <h1>{{ $group->name}}</h1>
            <p>{{ $group->user->name}}</p>
            <p>{{ $group->category->name}}</p>
        </div>
    </div>
    <p class="card-text">{{ $group->description}}</p>
     <div class="row">
          <div class="col-sm-10"><a href="{{ route('plans.index')}}"><i class="fas fa-list"> イベント一覧</i></a></div>
          <div class="col-sm-2"><a href="{{ route('plans.create')}}"><i class="fas fa-plus"> イベント作成</i></a></div>
     </div>
 </div>
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
