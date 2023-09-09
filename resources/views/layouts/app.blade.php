<!DOCTYPE HTML>
<html>
	<head>
		<title>Easy Migration</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
                                <header id="header">
									<a href="{{ url('/') }}" class="logo"><strong>Easy</strong> Migration</a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                                        @if(auth()->check())
											<li>Welcome, {{ auth()->user()->name }}</li>
                                            <li><a href="{{ route('user.logout') }}" class="button primary small">Logout</a></li>
                                        @else
                                            <li><a href="{{ route('user.login.form') }}" class="button primary small">Login</a></li>
                                        @endif
									</ul>
								</header>

                                @yield('content')

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
                            <nav id="menu">
                                <header class="major">
                                    <h2>Menu</h2>
                                </header>
                                <ul>
                                    <li><a href="#">Homepage</a></li> <!-- View Free Consultation Offer -->
                                    <li><a href="#">Services</a></li> <!-- Read About Services -->
                                    <li><a href="#">Latest Cases</a></li> <!-- Read Latest Cases -->
                                    <li><a href="#">Immigration News</a></li> <!-- Read Immigration News -->
                                    <li><a href="#">Testimonials</a></li> <!-- Read Testimonials -->
                                    <li><a href="#">Giving Back</a></li> <!-- Read Giving Back -->
                                    <li><a href="#">Application Forms</a></li> <!-- Fill Out Application Forms -->
                                    <li><a href="#">Book an Appointment</a></li> <!-- Book an Appointment -->
                                    <li><a href="#">Contact Us</a></li> <!-- Contact Through Form -->
                                </ul>
                            </nav>


							<!-- Section -->
								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#">info@easymigration</a></li>
										<li class="icon solid fa-phone">(000) 000-0000</li>
										<li class="icon solid fa-home">1234 Somewhere Road #8254<br />
										Sydeny, AU 00000-0000</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Easy Migration. All rights reserved.</p>
								</footer>

						</div>
					</div>

			</div>

            <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/browser.min.js') }}"></script>
			<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<script src="{{ asset('assets/js/main.js') }}"></script>
	</body>
</html>