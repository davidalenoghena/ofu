@include('partials.head')
@stack('css')

<body>
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('partials.footer')
    @yield('js')
</body>