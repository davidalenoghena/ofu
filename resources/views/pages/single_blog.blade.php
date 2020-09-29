@extends('layouts.home')
@push('css')
<head>
  <title>OFU - Blog</title>

  <!-- Favicons -->
  <link href="{{ asset('about_assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('about_assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/blog.css') }}" rel="stylesheet">

</head>
@endpush
@section('content')

    <div id="app" >
      <!--Blog Heading  -->
      <section id="title" >
        <div class="container">
			<div class="row ">
				<div class="col-md-6">
					<h1 class="mb-5">How to Land a Job in Your Dream Location? Ideas and Insider Stories</h1>
					<div class="profile d-flex ">
						<div>
							<img src="{{ asset('blog_assets/img/grey.png') }}" class="image mr-4 smaller-image" alt="grey-illustration">
						</div>
						<div>
							<p><span class= "black">David Alenoghena</span><br>
							<span class = "text-muted">Blogger and Certified Big-head</span><br>
							<em>Updated  21/09/2020</em></p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<img src="{{ asset('blog_assets/img/illustration.svg') }}" class="image" alt="blog-illustration">
				</div>     
			</div>
		</div>	
	  </section>
	  


	<section class = "relative">
		<section id="icons">
			<div>
				<i class="fas fa-thumbs-up"><small class="mt-2"><br>286</small></i>
				<i class="fa fa-twitter"></i></li>
				<i class="fa fa-facebook"></i>
				<i class="fa fa-google-plus"></i>
				<i class="fa fa-linkedin"></i>
				<i class="far fa-comments"></i>
			</div>
		</section>

		<section id="content" class = "container">
			<p class="blog-content">
				Life’s short, so let’s jump right in— Do you really want to die as a nine-to-five desk jockey? With a headstone epitaph that reads: 
				“Met Deadlines” at best? Even if you’re pretty happy with where you’re in right now, I’m guessing the answer is no. You’re going to the office. 
				Maybe you’re coming home from the office. You might as well be at the office right now. Come lunch and you’ll be scrolling through your Instagram feed, 
				half-smiling at random cat pictures, when you’ll see photos of your friends chilling out in amazing places. We both know that #jealous comment you’ll
				leave will come from a dark, dark place of envy. Oh, I could really use a break—you’ll say and start counting days until your next vacation.
				I’m going to stop you right there.What if you wouldn’t have to wait for holidays ever again? What if, every day, you’d wake up to the sight of 
				an ever-blue ocean,wide sandy beaches, and palm trees slowly swaying in the delicate breeze? In just a few months’ time, this (or any other place in 
				the world) can be your workplace:
			</p>

			<p class="blog-content">
				Life’s short, so let’s jump right in— Do you really want to die as a nine-to-five desk jockey? With a headstone epitaph that reads: 
				“Met Deadlines” at best? Even if you’re pretty happy with where you’re in right now, I’m guessing the answer is no. You’re going to the office. 
				Maybe you’re coming home from the office. You might as well be at the office right now. Come lunch and you’ll be scrolling through your Instagram feed, 
				half-smiling at random cat pictures, when you’ll see photos of your friends chilling out in amazing places. We both know that #jealous comment you’ll
				leave will come from a dark, dark place of envy. Oh, I could really use a break—you’ll say and start counting days until your next vacation.
				I’m going to stop you right there.What if you wouldn’t have to wait for holidays ever again? What if, every day, you’d wake up to the sight of 
				an ever-blue ocean,wide sandy beaches, and palm trees slowly swaying in the delicate breeze? In just a few months’ time, this (or any other place in 
				the world) can be your workplace:
			</p>

			<p class="blog-content">
				Life’s short, so let’s jump right in— Do you really want to die as a nine-to-five desk jockey? With a headstone epitaph that reads: 
				“Met Deadlines” at best? Even if you’re pretty happy with where you’re in right now, I’m guessing the answer is no. You’re going to the office. 
				Maybe you’re coming home from the office. You might as well be at the office right now. Come lunch and you’ll be scrolling through your Instagram feed, 
				half-smiling at random cat pictures, when you’ll see photos of your friends chilling out in amazing places. We both know that #jealous comment you’ll
				leave will come from a dark, dark place of envy. Oh, I could really use a break—you’ll say and start counting days until your next vacation.
				I’m going to stop you right there.What if you wouldn’t have to wait for holidays ever again? What if, every day, you’d wake up to the sight of 
				an ever-blue ocean,wide sandy beaches, and palm trees slowly swaying in the delicate breeze? In just a few months’ time, this (or any other place in 
				the world) can be your workplace:
			</p>

			<div class= "heading-number text-center">
				<span>1</span>
			</div>
				<h3 class="text-center">Get All Dramatic</h3>
				<div>
					<p class="blog-content">
						Anyone can get a job in a tropical paradise— Sell your stuff, quit your job, and move to Asia to start teaching English.
						It’s just that, unless you have a firm plan, you’ll probably come back beaten after a few months, only to hear all your friends’ patronizing pep talks about how you almost made it work.
					</p>
				</div>
				<div class="my-4 flex-center">
					<img src="{{ asset('blog_assets/img/hero-bg.jpg') }}" class="image filter" alt="blog-illustration">
				</div>


				<div class= "heading-number mt-5 text-center">
				<span>2</span>
				</div>
				<h3 class="text-center">Get All Dramatic</h3>
				<div>
					<p class="blog-content">
						Anyone can get a job in a tropical paradise— Sell your stuff, quit your job, and move to Asia to start teaching English.
						It’s just that, unless you have a firm plan, you’ll probably come back beaten after a few months, only to hear all your friends’ patronizing pep talks about how you almost made it work.
					</p>
				</div>

				<div class = "space-evenly">
					<div>
						<strong>Rate my article:</strong><br>
						<p>How to land a job in your dream location</p>
					</div>
					<div class="text-muted">
						<p class="mb-0">Average: 4.63 (88 votes)</p>
					</div>
					<div class="d-flex">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star-half-alt"></i>
					</div>
				</div>
				
		</section>

		<!-- Featured Blogs -->
		<section id="featured">
			<div class="container profile d-flex ">
				<div>
					<img src="{{ asset('blog_assets/img/grey.png') }}" class="image mr-4 small-image" alt="grey-illustration">
				</div>
				<div>
					<h3>David Alenoghena</h3>
					<p>Cursus suscipit egestas tellus luctus tincidunt lectus. Curabitur dui quam bibendum nulla. Felis elit, magna dictumst et mauris tellus aliquam. 
					Sit et pellentesque vestibulum volutpat, aenean sollicitudin. Nec hendrerit eget sapien adipiscing.
					</p>
					<a href="#">
						<img src="{{ asset('blog_assets/img/social.svg') }}" class="image linkedin small-image" alt="social-illustration">
					</a>

				</div>
			</div>
		</section>
	</section>

	<!-- Latest Blogs -->
	<section id="latest" class= "container">
			<div class="container">
			<h2 class="text-center my-5">Similar Articles</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="card mb-3">
					<img class="card-img-top image cover" src="{{ asset('blog_assets/img/data.svg') }}" alt="blog-illustration">
					<div class="card-body">
						<small class="text-muted uppercase">26 sep 2020</small>
						<h5 class="card-title my-3">Where To Look For Cheap Brochure Printing </h5>
						<p class="card-text mb-3">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.</p>
						<div class="card-text text-muted d-flex">
						<i class="far fa-comments"></i><small class="mr-3">7.4k</small>
						<i class="far fa-eye"></i><small>45</small>
						</div>
					</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mb-3">
					<img class="card-img-top image cover" src="{{ asset('blog_assets/img/data.svg') }}" alt="blog-illustration">
					<div class="card-body">
						<small class="text-muted uppercase">26 sep 2020</small>
						<h5 class="card-title my-3">Where To Look For Cheap Brochure Printing </h5>
						<p class="card-text mb-3">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.</p>
						<div class="card-text text-muted d-flex">
						<i class="far fa-comments"></i><small class="mr-3">7.4k</small>
						<i class="far fa-eye"></i><small>45</small>
						</div>
					</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mb-3">
					<img class="card-img-top image cover" src="{{ asset('blog_assets/img/data.svg') }}" alt="blog-illustration">
					<div class="card-body">
						<small class="text-muted uppercase">26 sep 2020</small>
						<h5 class="card-title my-3">Where To Look For Cheap Brochure Printing </h5>
						<p class="card-text mb-3">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.</p>
						<div class="card-text text-muted d-flex">
						<i class="far fa-comments"></i><small class="mr-3">7.4k</small>
						<i class="far fa-eye"></i><small>45</small>
						</div>
					</div>
					</div>
				</div>
			</div>
			</div>
	</section>

    </div>

@section('js')
    <!-- Bootstrap JS, PopperJS, jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- Flickity JS -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src= "{{asset('js/nav.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection
</body>

</html>
