<!doctype html>
<html lang="en">

<!-- Mirrored from bootstrap.gallery/unify-dashboards/design-1/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Aug 2021 19:55:56 GMT -->
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Unify Admin Panel" />
		<meta name="keywords" content="Signup, Login, Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="img/favicon.ico" />
		<title>Unify Admin Dashboard - Signup</title>

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

		<!-- Common CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="fonts/icomoon/icomoon.css" />

		<!-- Mian and Login css -->
		<link rel="stylesheet" href="css/main.css" />

	</head>

	<body class="login-bg">


    <div class="container">
        <div class="login-screen row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <form  method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="login-container">
                        <div class="row no-gutters">
                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                                <div class="login-box">
                                    <a href="#" class="login-logo">
                                        <img src="img/unify.png" alt="Unify Admin Dashboard" />
                                    </a>

                                    <ul class="my-3">
                                        @foreach ($errors->all() as $error)
                                            <li class="text-danger">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="fullname"><i class="icon-account_circle"></i></span>
                                        <input type="text" class="form-control   @error('name') is-invalid @enderror" placeholder="Fullname" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
<br>
                                @error('name')
                                <p class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="email"><i class="icon-account_circle"></i></span>
                                        <input type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email ID" class="form-control">

                                        @error('email')
                                        <p class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror
                                    </div>
                                    <br>
                                    {{-- Age --}}
                                    <div class="input-group">
                                        <span class="input-group-addon" id="age"><i class="icon-account_circle"></i></span>
                                        <input type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" placeholder="Enter your age"><br>

                                        @error('age')
                                        <p class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror

                                    </div>
                                    <br>

                                    {{-- end of age --}}
                                    {{-- Gender --}}
                                    {{-- <div class="input-group">
                                        <span >Gender</span>

                                        <input id="female" type="radio"class="form-control" name="gender" value="Female" {{ (old('gender') == 'female') ? 'checked' : '' }} /><span> Female</span>
                                        <input id="male" type="radio"class="form-control" name="gender" value="Male" {{ (old('gender') == 'male') ? 'checked' : '' }} /><span>Male</span>

                                        @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <br> --}}


                                    {{-- end of gender --}}
                                    {{--  Custom  --}}
                                    <div class="input-group">
                                        <span class="input-group-addon" id="age"><i class="icon-account_circle"></i></span>
                                        <input type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" placeholder="Type Male or Female"><br>

                                        @error('gender')
                                        <p class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror

                                    </div>
                                    <br>

                                    {{-- End of custom --}}

                                    <div class="input-group">
                                        <span class="input-group-addon" id="password"><i class="icon-verified_user"></i></span>
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                        @error('password')
                                        <p class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror
                                    </div>
                                    <div class="actions clearfix">
                                        <button type="submit" class="btn btn-primary">Signup</button>
                                    </div>
                                    <div class="or"></div>
                                    <div class="mt-4">
                                        <a href='{{route("login")}}'  class="additional-link">Already have an Account? <span>Login Now</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                                <div class="signup-slider"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

    </div>





</div>

<footer class="main-footer no-bdr fixed-btm">
    <div class="container">
        Copyright
    </div>
</footer>
</body>

<!-- Mirrored from bootstrap.gallery/unify-dashboards/design-1/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Aug 2021 19:55:56 GMT -->
</html>

