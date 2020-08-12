<header>
<nav class="navbar  navbar-expand-lg text-white navbar-dark fixed-top">
        
        <button class="navbar-toggler collapsed"type="button" data-toggle="collapse" data-target="#navbarmenu" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="one"></span>
                <span class="two"></span>
                <span class="three"></span>
        </button>
         
        <div class = "navbanner">
        <div class="navbar-brand ml">
            <span><strong>OFU<span class = "nav-span">||||</span></strong></span>
        </div>
        <div class="navbar-collapse collapse" id="navbarmenu">
                <ul class="navbar-nav">
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
                        <a class="nav-link" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item mr">
                        <a class="nav-link " href="#" >CONTACT</a>
                    </li>
                </ul>
        </div>
</div>
          
            <div class = "ml-auto ">
                <ul class = "navbar-nav login-btns">
                    <li class = "nav-item"><a class = "transparent-btn px-3 nav-link" href="{{ route('login') }}">LOGIN</a></li>
                    <li class = "nav-item register btn-blue"><a class = "nav-link" href="{{ route('register') }}" >REGISTER</a></li>
                </ul>
            </div>
    </nav>
</header>