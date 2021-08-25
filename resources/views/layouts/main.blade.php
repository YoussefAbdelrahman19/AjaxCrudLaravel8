<!doctype html>
<html lang="en">

<!-- Mirrored from bootstrap.gallery/unify-dashboards/design-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Aug 2021 19:54:44 GMT -->
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Unify Admin Panel" />
		<meta name="keywords" content="Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="img/favicon.ico" />
		<title>Unify Admin Dashboard</title>

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

		<!-- Common CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="fonts/icomoon/icomoon.css" />
		<link rel="stylesheet" href="css/main.css" />

		<!-- Other CSS includes plugins - Cleanedup unnecessary CSS -->
		<!-- Chartist css -->
		<link href="vendor/chartist/css/chartist.min.css" rel="stylesheet" />
		<link href="vendor/chartist/css/chartist-custom.css" rel="stylesheet" />
		{{-- For Pie chart --}}
		{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
        {{-- for chart google --}}
{{-- for Datatables ajax --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> --}}
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> --}}

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> --}}
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

{{-- pie chart files --}}


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> --}}
{{-- For barchart --}}
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


	</head>
	<body>

		<!-- Loading starts -->
		<div id="loading-wrapper">
			<div id="loader">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
				<div class="line4"></div>
				<div class="line5"></div>
				<div class="line6"></div>
			</div>
		</div>
		<!-- Loading ends -->

		<!-- BEGIN .app-wrap -->
		<div class="app-wrap">
			<!-- BEGIN .app-heading -->
			<header class="app-header">
				<div class="container-fluid">
					<div class="row gutters">
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-3 col-4">
							<a class="mini-nav-btn" href="#" id="app-side-mini-toggler">
								<i class="icon-menu5"></i>
							</a>
							<a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true">
								<i class="icon-chevron-thin-left"></i>
							</a>
						</div>
						<div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-4">
							<a href="index-2.html" class="logo">
								<img src="img/unify.png" alt="Unify Admin Dashboard" />
							</a>
						</div>
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-3 col-4">
							<ul class="header-actions">
								<li class="dropdown">
									<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
										<i class="icon-notifications_none"></i>
										<span class="count-label"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="notifications">
										<ul class="imp-notify">
											<li>
												<div class="icon">W</div>
												<div class="details">
													<p><span>Wilson</span> The best Dashboard design I have seen ever.</p>
												</div>
											</li>
											<li>
												<div class="icon">J</div>
												<div class="details">
													<p><span>John Smith</span> Jhonny sent you a message. Read now!</p>
												</div>
											</li>
											<li>
												<div class="icon secondary">R</div>
												<div class="details">
													<p><span>Justin Mezzell</span> Stella, Added you as a Friend. Accept it!</p>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li>
									<a href="#" id="todos" data-toggle="dropdown" aria-haspopup="true">
										<i class="icon-person_outline"></i>
										<span class="count-label red"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="todos">
										<ul class="stats-widget">
				              <li>
				                <h4>$37895</h4>
				                <p>Revenue <span>+2%</span></p>
				                <div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
														<span class="sr-only">87% Complete (success)</span>
													</div>
												</div>
				              </li>
				              <li>
				                <h4>4,897</h4>
				                <p>Downloads <span>+39%</span></p>
				                <div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
														<span class="sr-only">65% Complete (success)</span>
													</div>
												</div>
				              </li>
				              <li>
				                <h4>2,219</h4>
				                <p>Uploads <span class="text-secondary">-7%</span></p>
				                <div class="progress">
													<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%">
														<span class="sr-only">42% Complete (success)</span>
													</div>
												</div>
				              </li>
				            </ul>
				          </div>
								</li>
								<li class="dropdown">
									<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
										<img class="avatar" src="img/user.png" alt="User Thumb" />
										<span class="user-name">
                                            @auth
                                            {{Auth::user()->name}}
                                            @else

                                                <a  href="{{ route('register') }}">Signup</a>


                                            @endauth


                                        </span>
										<i class="icon-chevron-small-down"></i>
									</a>
									<div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
										<ul class="user-settings-list">
											<li>
												<a href="{{route('welcome')}}">
													<div class="icon">
														<i class="icon-account_circle"></i>
													</div>
													<p>Home</p>
												</a>
											</li>
											<li>
												<a href="profile.html">
													<div class="icon red">
														<i class="icon-cog3"></i>
													</div>
													<p>Settings</p>
												</a>
											</li>
											<li>
												<a href="filters.html">
													<div class="icon yellow">
														<i class="icon-schedule"></i>
													</div>
													<p>Activity</p>
												</a>
											</li>
										</ul>
										<div class="logout-btn">
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Logout') }}
                                                </button>
                                            </form>

										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<!-- END: .app-heading -->
			<!-- BEGIN .app-container -->
			<div class="app-container">
				<!-- BEGIN .app-side -->
				<aside class="app-side" id="app-side">
					<!-- BEGIN .side-content -->
					<div class="side-content ">
						<!-- BEGIN .user-profile -->
						<div class="user-profile">
							<img src="img/user.png" class="profile-thumb" alt="User Thumb">
							<h6 class="profile-name">

                                {{-- {{Auth::user()->name}} --}}
                                @auth
                                {{Auth::user()->name}}
                                @else

                                    <a  href="{{ route('register') }}">Signup</a>


                                @endauth


                            </h6>
							<ul class="profile-actions">
								<li>
									<a href="#">
										<i class="icon-social-skype"></i>
										<span class="count-label red"></span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-social-twitter"></i>
									</a>
								</li>
								<li>
									<a href="{{route('login')}}">
										<i class="icon-export"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- END .user-profile -->
						<!-- BEGIN .side-nav -->
						<nav class="side-nav">
							<!-- BEGIN: side-nav-content -->
							<ul class="unifyMenu" id="unifyMenu">
								<li class="active selected">
									<a href="#" class="has-arrow" aria-expanded="false">
										<span class="has-icon">
											<i class="icon-laptop_windows"></i>
										</span>

										<span class="nav-title">Dashboards</span>
									</a>
									<ul aria-expanded="false" class="collapse in">
										<li>
											<a href='index-2.html' class="current-page">Dashboard</a>
										</li>
										<li>
											<a href='{{"/users"}}'>User</a>
										</li>

                                        {{-- /// --}}
                                        <li>
                                            <a href="#" class="has-arrow" aria-expanded="false">
                                                <span class="nav-title">Analytics</span>
                                            </a>
                                            <ul aria-expanded="false">
                                                <li>
                                                    <a  href="{{ route('barchart') }}">Bar Chart</a>
                                                </li>
                                                <li>
                                                    <a  href="{{ route('piechart') }}">Pie Chart</a>
                                                </li>



                                            </ul>
                                        </li>



                                        {{-- // --}}




									</ul>
								</li>
                                {{-- outer --}}

                                {{--  --}}
								{{-- <li>
									<a href="widgets.html">
										<span class="has-icon">
											<i class="icon-flash-outline"></i>



								<li class="menu-header">
									-- Side Heading
								</li> --}}
								<li>
									<a href="#" class="has-arrow" aria-expanded="false">
										<span class="has-icon">
											<i class="icon-lock_outline"></i>
										</span>
										<span class="nav-title">Authentication</span>
									</a>
									<ul aria-expanded="false">
										<li>
											<a  href="{{ route('login') }}">Login</a>
										</li>
										<li>
											<a  href="{{ route('register') }}">Signup</a>
										</li>



									</ul>
								</li>
							</ul>
							<!-- END: side-nav-content -->
						</nav>
						<!-- END: .side-nav -->
					</div>
					<!-- END: .side-content -->
				</aside>
				<!-- END: .app-side -->

				<!-- BEGIN .app-main -->
				<div class="app-main">
					<!-- BEGIN .main-heading -->
					<header class="main-heading">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
									<div class="page-icon">
										<i class="icon-laptop_windows"></i>
									</div>
									<div class="page-title">
										<h5>Dashboard</h5>
										<h6 class="sub-heading">Welcome to Unify Admin Template </h6>
									</div>
								</div>

								</div>
							</div>
						</div>
					</header>
                    <div class="container-fluid">
                        <div class="row justify-content-center">

 @yield('content')


                    </div>
                </div>
					<!-- END: .main-heading -->

					<!-- BEGIN .main-content -->

                {{-- my custom yield --}}

                {{-- end of custom yield --}}



		</div>
		<!-- END: .app-wrap -->

		<!-- jQuery first, then Tether, then other JS. -->
		<script src="js/jquery.js"></script>
		<script src="js/tether.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="vendor/unifyMenu/unifyMenu.js"></script>
		<script src="vendor/onoffcanvas/onoffcanvas.js"></script>
		<script src="js/moment.js"></script>

		<!-- Slimscroll JS -->
		<script src="vendor/slimscroll/slimscroll.min.js"></script>
		<script src="vendor/slimscroll/custom-scrollbar.js"></script>

		<!-- Chartist JS -->
		<script src="vendor/chartist/js/chartist.min.js"></script>
		<script src="vendor/chartist/js/chartist-tooltip.js"></script>
		<script src="vendor/chartist/js/custom/custom-line-chart.js"></script>
		<script src="vendor/chartist/js/custom/custom-line-chart1.js"></script>
		<script src="vendor/chartist/js/custom/custom-area-chart.js"></script>
		<script src="vendor/chartist/js/custom/donut-chart2.js"></script>
		<script src="vendor/chartist/js/custom/custom-line-chart4.js"></script>

		<!-- Common JS -->
		<script src="js/common.js"></script>

	</body>

<!-- Mirrored from bootstrap.gallery/unify-dashboards/design-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Aug 2021 19:54:44 GMT -->
</html>
