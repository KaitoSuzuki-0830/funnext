<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('outline.index') }}">
            {{-- <img src="/uploads/logo/relaccumtitle.png" alt="relaccum" width="200px" height="60px"> --}}
            <h1 id="servicename">FunNext</h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('outline.index')}}">Search</a>
                    </li>
                    @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('groups.create')}}">Group's Create</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('plans.create')}}">Plan's Create</a>
                    </li>
                    @endif
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/help">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @if(Auth::check())
                                <img src="{{ isset($user)? secure_asset($user->profile): Auth::user()->profile}}"  height="60px" width="60px" style="border-radius: 50%" class="profile-image img-circle">
                                {{-- alt="{{ Auth::user()->name}}"  ->avatar--}}
                            @endif
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a>
                            <a class="dropdown-item" href="#">Attend</a>
                            <a class="dropdown-item" href="#">Join</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
