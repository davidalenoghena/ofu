<header>
<nav class="navbar  navbar-expand-lg text-white navbar-dark fixed-top" id = "ofu-navbar">
        
        <div class="navbar-toggler">
                <span class="one"></span>
                <span class="two"></span>
                <span class="three"></span>
        </div>
         
        <div class = "navbanner">
        <div class="navbar-brand ml">
            <a href="/" class = "text-white"><span><strong>OFU<span class = "nav-span">||||</span></strong></span></a>
        </div>
        <div class="navbar-collapse " id="navbarmenu">
                <ul class="navbar-nav nav-links">
                <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">HOME</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">OPPORTUNITIES</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown08">
                            <ul>
                            <li class = "dropdown-li"><a class="dropdown-item" href="#">SCHOLARSHIPS</a></li>
                            <li class = "dropdown-li"><a class="dropdown-item" href="#">INTERNSHIPS</a></li>
                            <li class = "dropdown-li"><a class="dropdown-item" href="#">GRANTS</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('about')}}">ABOUT</a>
                    </li>
                    <li class="nav-item mr">
                        <a class="nav-link " href="#" >CONTACT</a>
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
                            <a class="nav-link transparent-btn px-3" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item btn-reg">
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
                </ul>
            </div>
    </nav>
</header>