@include('partials.head')
@stack('css')

<body>
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Content -->
    @include('pages.home')

    @yield('js')
    <!-- Footer -->
    @include('partials.footer')
</body>