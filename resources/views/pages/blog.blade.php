  
  @include('partials.navbar')

 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog - Presento Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('blog_assets/img/favicon.png') }}" rel="stylesheet">
  <link href="{{ asset('blog_assets/img/apple-touch-icon.png') }}" rel="stylesheet">
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- Vendor CSS Files -->
<link href="{{ asset('blog_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('blog_assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
<link href="{{ asset('blog_assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('blog_assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('blog_assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
<link href="{{ asset('blog_assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
<link href="{{ asset('blog_assets/vendor/aos/aos.css') }}" rel="stylesheet">



  <!-- Template Main CSS File -->
  <link href="{{ asset('blog_assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento - v1.0.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-portfolio-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <main id="main">

   <br>
   <br>
   <br>
   <br>

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

          <div class='row'>

            <article class="entry col-7">

              <div class="_entry-img">
                
                <img src="{{ asset('blog_assets/img/blog/') }}" style="height: 500px width: 500px" alt="" class="img-fluid">
                              
              </div>
                 
            </article><!-- End blog entry -->

                        

            <article class="entry col-5">

              @foreach($blogs as $blog)
              <h2 class="entry-title">
                <a href="blog-single.html">{{ $blog->blog_title }}</a>
              </h2>
              


              <div class="entry-content">
                <p>
                {{ $blog->blog_post }}
                </p>

                <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">{{ $blog->author }}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $blog->category }}</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>
              @endforeach
           </div>
                 
            </article><!-- End blog entry -->

       

              <div class='row'>
               <div class="col-md-6 d-flex align-items-stretch">
                <article class="entry">

                  <div class="entry-img">
                    <img src="{{ asset('blog_assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                  </div>

                  <h2 class="entry-title">
                    <a href="blog-single.html">Nisi magni odit consequatur autem nulla dolorem</a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                      Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias.
                    </p>
                    <div class="read-more">
                      <a href="blog-single.html">Read More</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
              </div>

              <div class="col-md-6 d-flex align-items-stretch">
                <article class="entry">

                  <div class="entry-img">
                    <img src="{{ asset('blog_assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                  </div>

                  <h2 class="entry-title">
                    <a href="blog-single.html">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                      Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis tara kero pakla metaruna nedore stan.
                    </p>
                    <div class="read-more">
                      <a href="blog-single.html">Read More</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
              </div>
              </div>
            <div class='row'>
               <div class="col-md-6 d-flex align-items-stretch">
                <article class="entry">

                  <div class="entry-img">
                    <img src="{{ asset('blog_assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                  </div>

                  <h2 class="entry-title">
                    <a href="blog-single.html">Nisi magni odit consequatur autem nulla dolorem</a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                      Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias.
                    </p>
                    <div class="read-more">
                      <a href="blog-single.html">Read More</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
              </div>

              <div class="col-md-6 d-flex align-items-stretch">
                <article class="entry">

                  <div class="entry-img">
                    <img src="{{ asset('blog_assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                  </div>

                  <h2 class="entry-title">
                    <a href="blog-single.html">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                      Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis tara kero pakla metaruna nedore stan.
                    </p>
                    <div class="read-more">
                      <a href="blog-single.html">Read More</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
              </div>
              </div>


            <div class='row'>
               <div class="col-md-6 d-flex align-items-stretch">
                <article class="entry">

                  <div class="entry-img">
                    <img src="{{ asset('blog_assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                  </div>

                  <h2 class="entry-title">
                    <a href="blog-single.html">Nisi magni odit consequatur autem nulla dolorem</a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                      Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias.
                    </p>
                    <div class="read-more">
                      <a href="blog-single.html">Read More</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
              </div>

              <div class="col-md-6 d-flex align-items-stretch">
                <article class="entry">

                  <div class="entry-img">
                    <img src="{{ asset('blog_assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                  </div>

                  <h2 class="entry-title">
                    <a href="blog-single.html">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                      Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis tara kero pakla metaruna nedore stan.
                    </p>
                    <div class="read-more">
                      <a href="blog-single.html">Read More</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
              </div>
              </div>

           

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit" style="background: #007bff !important;"><i class="icofont-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">General <span>(25)</span></a></li>
                  <li><a href="#">Lifestyle <span>(12)</span></a></li>
                  <li><a href="#">Travel <span>(5)</span></a></li>
                  <li><a href="#">Design <span>(22)</span></a></li>
                  <li><a href="#">Creative <span>(8)</span></a></li>
                  <li><a href="#">Educaion <span>(14)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                  <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                  <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                  <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                  <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                  <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

 @include('partials.footer')
    @yield('js')

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  
  <script src="{{ asset('blog_assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('blog_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('blog_assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('blog_assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('blog_assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('blog_assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script> 
  <script src="{{ asset('blog_assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('blog_assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('blog_assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('blog_assets/vendor/aos/aos.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('blog_assets/js/main.js') }}"></script>


</body>

</html>
