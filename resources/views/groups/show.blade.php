@extends('layouts.app')
@section('content')
<div class="card">
 <div class="card-header">
    <div class="col-sm-8">グループ詳細</div>
    <div class="col-sm-4">
        <a href="{{ route('groups.edit',['id'=>$group->id])}}" class="btn btn-info"><i class="far fa-edit"> 編集</i></a>
    </div>
</div>


 <div class="card-body">
     <h5 class="card-title">{{ $group->name}}</h5>
     <img src="{{ secure_asset('uploads/groups/'.$group->featured)}}" alt="{{ $group->title }}" height="250px" width="100%">
     <p class="card-text">{{ $group->description}}</p>
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
