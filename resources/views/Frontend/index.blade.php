<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>HarrisonHighSchool</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="{{asset('css/frontend_css/style.css')}}" type="text/css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/multicheck/multicheck.css')}}">
	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">

	<!-- Custom CSS -->
	<link href="{{asset('assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{{asset('css/backend_css/style.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/libs/jquery-steps/steps.css')}}" rel="stylesheet">
	<link href="{{asset('assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
	<link href="{{asset('css/backend_css/fabochart.css')}}" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.flot/0.8.3/jquery.flot.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<![endif]-->
</head>
<body>

	<header id="header">

			<a href="index.html" id="logo" title="HarrisonHighSchool" style="background-image: url({{asset('assets/images/frontend_images/logo_school2.png')}});
                    width: 223px;
               height: 220px;
               display: block;
               cursor: pointer;
               margin: 0 auto -82px;
               text-indent: -9999em;
               z-index: 3;">HarrisonHighSchool</a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
					<li><a href="events.html">Home</a></li>
					<li><a href="gallery.html">About Us</a></li>
					<li><a href="events.html">School Profile</a></li>

 				</ul>
				<ul>
					<li><a href="gallery.html">Vision & Mission</a></li>
					<li><a href="gallery.html">Join Us</a></li>
					<li><a href="#fancy" class="get-contact">Contact Us</a></li>
   				</ul>
			</nav>
			<!-- / navigation -->

		<!-- / container -->
	
	</header>
	<nav class="navbar bg-dark fixed-bottom text-white">
		<a class="navbar-brand">Powered By:<img src="{{asset('assets/images/logos.png')}}"></a>
        <p class="copy">Copyright 2018 St. John College. Designed by <a href="http://www.vandelaydesign.com/" title="Designed by Vandelay Design" target="_blank"><strong>Yakku</strong></a>. All rights reserved.</p>
		@if(Auth::guard('admin')->check())
			<p>Hello <Text style="color: gold">{{Auth::guard('admin')->user()->name}}</Text><br>
			Logged In As: <a href="{{url('/admin/dashboard')}}">{{Auth::guard('admin')->user()->role}}</a></p>

            {{--<a href="{{ url('logout_user') }}"--}}
               {{--onclick="event.preventDefault();--}}
                            {{--document.getElementById('logout-form').submit();"><i class="fa fa-power-off m-r-5 m-l-5"></i>--}}
                {{--{{ __('Logout') }}--}}
            {{--</a></p>--}}

			@else
			<form class="form-inline" action="{{route('login')}}" method="post">
				{{ csrf_field() }}
				<input class="form-control mr-sm-2" type="email" placeholder="Email" aria-label="Email" name="email">
				<input class="form-control mr-sm-2" type="password" placeholder="Password" aria-label="Password" name="password">
				<button class="btn btn-outline-success btn-sm" type="submit">Login</button>
			</form>
		@endif
	</nav>
	<!-- / header -->

	<div class="col-md-12" >
		<div class="row"
			style="background-image: url({{asset('assets/images/frontend_images/banner_thinking.jpg')}});height: 500px;background-size: cover;">
		</div>
	</div>

	<section class="posts">
		<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card bg-transparent">
                        <div class="card-header bg-transparent"">
                            <img style="width: 400px" src="{{asset('assets/images/frontend_images/Learning-Featured1.jpg')}}" alt="">
                        </div>
                        <div class="card-body">
                            <h3>The best learning methods</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis quasi architecto beatae vitae dicta sunt explicabo. </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card bg-transparent">
                        <div class="card-header bg-transparent"">
                            <img style="width: 400px" src="{{asset('assets/images/frontend_images/banner_thinking.jpg')}}" alt="">
                        </div>
                        <div class="card-body">
                            <h3>The best learning methods</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis quasi architecto beatae vitae dicta sunt explicabo. </p>

                        </div>
                    </div>
                </div>
            </div>


		</div>
		<!-- / container -->
	</section>

	<section class="news" style="background-image: url({{asset('assets/images/frontend_images/banner_thinking.jpg')}});opacity: 0.5">
		<div class="container">
			<h2>Latest news</h2>
			<article>
				<div class="pic"><img src="images/1.png" alt=""></div>
				<div class="info">
					<h4>Omnis iste natus error sit voluptatem accusantium </h4>
					<p class="date">14 APR 2014, Jason Bang</p>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores (...)</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<article>
				<div class="pic"><img src="images/1_1.png" alt=""></div>
				<div class="info">
					<h4>Omnis iste natus error sit voluptatem accusantium </h4>
					<p class="date">14 APR 2014, Jason Bang</p>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores (...)</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<div class="btn-holder">
				<a class="btn" href="#">See archival news</a>
			</div>
		</div>
		<!-- / container -->
	</section>

	<section class="events">

			<h2>Upcoming events</h2>
			<article>
				<div class="current-date">
					<p>April</p>
					<p class="date">15</p>
				</div>
				<div class="info">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<article>
				<div class="current-date">
					<p>April</p>
					<p class="date">17</p>
				</div>
				<div class="info">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<article>
				<div class="current-date">
					<p>April</p>
					<p class="date">25</p>
				</div>
				<div class="info">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<article>
				<div class="current-date">
					<p>April</p>
					<p class="date">29</p>
				</div>
				<div class="info">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<div class="btn-holder">
				<a class="btn blue" href="#">See all upcoming events</a>
			</div>

		<!-- / container -->
	</section>
	<div class="container">
		<a href="#fancy" class="info-request">
			<span class="holder">
				<span class="title">Request information</span>
				<span class="text">Do you have some questions? Fill the form and get an answer!</span>
			</span>
			<span class="arrow"></span>
		</a>
	</div>

	<footer id="footer">
        <div class="col-md-12">
            <section>
                <article class="col-1">
                    <h3>Contact</h3>
                    <ul>
                        <li class="address"><a href="#">151 W Adams St<br>Detroit, MI 48226</a></li>
                        <li class="mail"><a href="#">contact@harrisonuniversity.com</a></li>
                        <li class="phone last"><a href="#">(971) 536 845 924</a></li>
                    </ul>
                </article>
                <article class="col-2">
                    <h3>Forum topics</h3>
                    <ul>
                        <li><a href="#">Omnis iste natus error sit</a></li>
                        <li><a href="#">Nam libero tempore cum soluta</a></li>
                        <li><a href="#">Totam rem aperiam eaque </a></li>
                        <li><a href="#">Ipsa quae ab illo inventore veritatis </a></li>
                        <li class="last"><a href="#">Architecto beatae vitae dicta sunt </a></li>
                    </ul>
                </article>
                <article class="col-3">
                    <h3>Social media</h3>
                    <p>Temporibus autem quibusdam et aut debitis aut rerum necessitatibus saepe.</p>
                    <ul>
                        <li class="facebook"><a href="#">Facebook</a></li>
                        <li class="google-plus"><a href="#">Google+</a></li>
                        <li class="twitter"><a href="#">Twitter</a></li>
                        <li class="pinterest"><a href="#">Pinterest</a></li>
                    </ul>
                </article>
                <article class="col-4">
                    <h3>Newsletter</h3>
                    <p>Assumenda est omnis dolor repellendus temporibus autem quibusdam.</p>
                    <form action="#">
                        <input placeholder="Email address..." type="text">
                        <button type="submit">Subscribe</button>
                    </form>
                    <ul>
                        <li><a href="#"></a></li>
                    </ul>
                </article>
            </section>
        </div>

			<p class="copy">Copyright 2014 Harrison High School. Designed by <a href="http://www.vandelaydesign.com/" title="Designed by Vandelay Design" target="_blank">Vandelay Design</a>. All rights reserved.</p>

		<!-- / container -->
	</footer>
	<!-- / footer -->

	<div id="fancy">
		<h2>Request information</h2>
		<form action="#">
			<div class="left">
				<fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
				<fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
				<fieldset class="subject"><select><option>Choose subject...</option><option>Choose subject...</option><option>Choose subject...</option></select></fieldset>
			</div>
			<div class="right">
				<fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset>
			</div>
			<div class="btn-holder">
				<button class="btn blue" type="submit">Send request</button>
			</div>
		</form>
	</div>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='{{asset('js/backend_js/jquery-1.11.1.min.js')}}'>\x3C/script>")</script>
	<script src="{{asset('js/backend_js/plugins.js')}}"></script>
	<script src="{{asset('js/backend_js/main.js')}}"></script>
</body>
</html>
