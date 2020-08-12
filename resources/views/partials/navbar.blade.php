<header>
<nav class="navbar  navbar-expand-lg text-white navbar-dark fixed-top">
        
        <button class="navbar-toggler collapsed"type="button" data-toggle="collapse" data-target="#navbarmenu" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="one"></span>
                <span class="two"></span>
                <span class="three"></span>
        </button>
            

        <div class="container">
        <div class="navbar-collapse collapse" id="navbarmenu">
            <div class="navbar-brand">
            <span><strong>OFU<span class = "nav-span">||||</span></strong></span>
            </div>

            <div>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown ml">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">OPPORTUNITIES</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown08">
                        <a class="dropdown-item" href="#">SCHOLARSHIPS</a>
                        <a class="dropdown-item" href="#">INTERNSHIPS</a>
                        <a class="dropdown-item" href="#">GRANTS</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item mr">
                        <a class="nav-link " href="#" >CONTACT</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item btn-blue">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                    <!-- <li class = "nav-item"><a class = "nav-link" href="{{ route('login') }}">LOGIN</a></li>
                    <li class = "nav-item btn-blue"><a class = "nav-link" href="{{ route('register') }}" >REGISTER</a></li> -->
                </ul>
            </div>
        </div>
        </div>
    </nav>
</header>