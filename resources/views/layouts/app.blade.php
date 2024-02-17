<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('images/logo-1.png') }}">
	<title>EcoTech Solutions </title>
	<!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link href="{{ asset('assets/css/all.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6vP0k0GtQ3hBnBMvsp0UvjMXhoMJkbiyKH5gFuiF4mXJtkp6RVj8aPyQ8h3jD7T" crossorigin="anonymous">

</head>
<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark top-nav fixed-top" >
        <div class="container">
			<a class="navbar-brand d-none d-lg-block" href="/">
				<img src="{{ asset('images/logo-1.png')}}" alt="logo"  height="65px"class="logo-small" />
			</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link  mr-2 {{ request()->routeIs('home') ? 'active' : '' }} " href="{{ route('home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class=" nav-link mr-2 {{ request()->routeIs('about') ? 'active' : '' }} " href="{{ route('about')}}">About</a>
                  </li>
				  <li class="nav-item">
                     <a class=" nav-link mr-2 {{ request()->routeIs('user.request') ? 'active' : '' }} " href="{{ route('user.request')}}">Make Request</a>
                  </li>
                  <li class="nav-item mr-2 ">
                     <a class="nav-link" href="#">Services</a>
                  </li>
                  <!-- <li class="nav-item mr-2 dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Portfolio
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
                     </div>
                  </li>
                  <li class="nav-item mr-2 dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Blog
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
                        <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
                        <a class="dropdown-item" href="blog-post.html">Blog Post</a>
                     </div>
                  </li> -->
               
                  <li class="nav-item mr-2">
                     <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }} " href="{{ route ('contact')}}">Contact</a>
                  </li>
                  <li class="nav-item mr-2">
                     @if(Auth::check())
                        <a class="nav-link {{ request()->routeIs('user.dashboard') ? 'active' : '' }}" href="{{ route('user.dashboard') }}">My Account</a> 
                     @else
                        <a class="nav-link  {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">SIGN IN</a> 
                     @endif
                     
                  </li>
               </ul>
            </div>
        </div>
    </nav>
    <header class="slider-main" style="background-color: #f7f7f7;">
    

    @yield('content')   

     <!-- /.container -->
    <!--footer starts from here-->
    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
					<!--headin5_amrc-->
					<p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
					<p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
					<p><i class="fa fa-phone"></i> +91-9999878398 </p>
					<p><i class="fa fa fa-envelope"></i> info@example.com </p>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
					<!--headin5_amrc ends here-->
					<ul class="footer_ul2_amrc">
						<li>
							<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
							<p>Lorem Ipsum is simply dummy printing...<a href="#">https://www.lipsum.com/</a></p>
						</li>
						<li>
							<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
							<p>Lorem Ipsum is simply dummy printing...<a href="#">https://www.lipsum.com/</a></p>
						</li>
						<li>
							<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
							<p>Lorem Ipsum is simply dummy printing...<a href="#">https://www.lipsum.com/</a></p>
						</li>
					</ul>
					<!--footer_ul2_amrc ends here-->
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
					<!--headin5_amrc-->
					<ul class="footer_ul_amrc">
						<li><a href="#">Default Version</a></li>
						<li><a href="#">Boxed Version</a></li>
						<li><a href="#">Our Team </a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Our Services</a></li>
						<li><a href="#">Get In Touch</a></li>
					</ul>
					<!--footer_ul_amrc ends here-->
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 ">
					<h5 class="headin5_amrc col_white_amrc pt2">Recent posts</h5>
					<!--headin5_amrc-->
					<ul class="footer_ul_amrc">
						<li class="media">
							<div class="media-left">
								<img class="img-fluid" src="images/post-img-01.jpg" alt="" />
							</div>
							<div class="media-body">
								<p>How to find best dog food?</p>
								<span>22 Sep 2018</span>
							</div>
						</li>
						<li class="media">
							<div class="media-left">
								<img class="img-fluid" src="images/post-img-02.jpg" alt="" />
							</div>
							<div class="media-body">
								<p>How to find best dog food?</p>
								<span>34 Sep 2018</span>
							</div>
						</li>
						<li class="media">
							<div class="media-left">
								<img class="img-fluid" src="images/post-img-03.jpg" alt="" />
							</div>
							<div class="media-body">
								<p>How to find best dog food?</p>
								<span>30 Sep 2018</span>
							</div>
						</li>
					</ul>
					<!--footer_ul_amrc ends here-->
				</div>
			</div>
		</div>
        <div class="container">
            <div class="footer-logo">
				<a href="#"><img src="images/footer-logo.png" alt="" /></a>
			</div>
            <!--foote_bottom_ul_amrc ends here-->
           
            <ul class="social_footer_ul">
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <!--social_footer_ul ends here-->
        </div>
    </footer>
	  
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>