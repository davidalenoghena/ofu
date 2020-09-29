<!-- Footer Section Begins Here -->

<footer>
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <section id="footer">
            <div class="container  footer-sect">
                <div class = "col-md-4 copyright ">
                <p> &copy; Copyright <script>document.write(new Date().getFullYear())</script>, Opportunities for Undergraduates</p>
                </div>

                <div class="footer-flex ">
                    <div class = "">
                        <ul class = "d-flex">
                            <li><a href = "{{ route('home') }}">Home</a></li>
                            <li><a href = "{{ route('opportunities') }}">Opportunities</a></li>
                            <li><a href = "{{ route('blog') }}">Blog</a></li>
                            <li><a href = "{{ route('about') }}">About</a></li>
                            <li><a href = "{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>

                    <div class = " links ">
                        <ul class = "d-flex">
                            <li><i class="fa fa-twitter"></i></li>
                            <li><i class="fa fa-facebook"></i></li>
                            <li><i class="fa fa-google-plus"></i></li>
                            <li><i class="fa fa-linkedin"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
</footer>