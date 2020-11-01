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