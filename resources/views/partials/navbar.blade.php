<header>
<link rel="stylesheet" href="{{asset('css/navbar.css')}}">

<nav class="navbar  navbar-expand-lg navbar-dark fixed-top" id = "ofu-navbar">
        
    <div class="navbar-toggler">
            <span class="one"></span>
            <span class="two"></span>
            <span class="three"></span>
    </div>
    
    <div class = "navbanner">
        <div class="navbar-brand ml ">
            <a href="/" ><span><strong class = "switch">Opportunities for Undergraduates</strong></span></a>
            <div class="caption switch">NEVER MISS AN OPPORTUNITY</div>
        </div>
        <div class="navbar-collapse " id="navbarmenu">
            <ul class="navbar-nav nav-links">
                <li class="nav-item active">
                        <a class="nav-link  switch" href="{{ route('home') }}">HOME</a>
                </li>
                <li class="nav-item dropdown ">
                    <a href = "{{ route ('opportunities') }}" class="nav-link nav-grey dropdown-toggle " id="dropdown08" aria-haspopup="true" aria-expanded="false">OPPORTUNITIES</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown08">
                        <ul>
                            <li class = "dropdown-li"><a class="dropdown-item"  href = "{{ route ('opportunities') }}" >SCHOLARSHIPS</a></li>
                            <li class = "dropdown-li"><a class="dropdown-item"  href = "{{ route ('internships') }}" >INTERNSHIPS</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link nav-grey" href="{{ route ('blog')}}">BLOG</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link nav-grey" href="{{ route ('about')}}">ABOUT</a>
                </li>
                <li class="nav-item mr ">
                    <a class="nav-link nav-grey " href="{{ route('contact') }}" >CONTACT</a>
                </li>
                <!-- <li class = "nav-item"><a class = "nav-link" href="{{ route('login') }}">LOGIN</a></li>
                <li class = "nav-item btn-blue"><a class = "nav-link" href="{{ route('register') }}" >REGISTER</a></li> -->
            </ul>
        </div>
    </div>

    <div class = "ml-auto ">
        
        <ul class="navbar-nav login-btns">
        @guest
                <li class="nav-item">
                    <a class="nav-link px-3 switch" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item btn-blue ">
                        <a class="nav-link " href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->fname }} {{ Auth::user()->lname }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" style="color: #fff">
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
</nav>
</header>