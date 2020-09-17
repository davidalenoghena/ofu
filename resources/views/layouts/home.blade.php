@include('partials.head')
@stack('css')
<body>
    <div id = "app">
        <!-- Navbar -->
        @include('partials.navbar')

        <!-- Content -->
        @yield('content')

        <!-- Footer -->
        @include('partials.footer')
    </div>

    @yield('js')
    </body>