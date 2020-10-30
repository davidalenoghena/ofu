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
                <li class="nav-item ">
                        <a class="nav-link nav-grey" href="{{ route('home') }}">HOME</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link nav-grey" href = "{{ route ('opportunities') }}" >SCHOLARSHIPS</a>
                </li>
                <li class="nav-item dropdown ">
                    <span class="nav-link nav-grey dropdown-toggle " id="dropdown08" aria-haspopup="true" aria-expanded="false">OPPORTUNITIES</span>
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
            </ul>
        </div>
    </div>
</nav>
</header>