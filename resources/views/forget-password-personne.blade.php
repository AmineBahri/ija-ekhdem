<!DOCTYPE html>
<!-- Mirrored from www.vasterad.com/themes/hireo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2020 13:37:06 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>IJA E5DEM</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{asset('template/css/style.css')}}">
<link rel="stylesheet" href="{{asset('template/css/colors/blue.css')}}">

</head>
<body>

<!-- Wrapper -->
<div id="wrapper" class="wrapper-with-transparent-header">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth transparent-header">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index-2.html"><img src="{{asset('template/images/logo.png')}}" data-sticky-logo="{{asset('template/images/logo.png')}}" data-transparent-logo="{{asset('template/images/logo.png')}}" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">
					<!--<li><a href="index.php"><img src="images/logo.png" width="200px"height="40px"></a></li>-->
						<li><a href="{{url('/')}}" class="current">Acceuil</a></li>
						<li><a href="{{url('/auth')}}">Authentification </a></li>
     					<li><a href="{{url('/register')}}"> Inscription</a></li>
						<li><a href="{{url('/contact')}}">Contact</a></li>
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<div class="container">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">


			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Nous sommes ravis de vous revoir!</h3>
					<span>vous n'avez pas de compte? <a href="{{url('register')}}">S'inscrire!</a></span>
				</div>
				@if(Session::get('status'))
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                   {{ Session::get('status') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                  </button>
                 </div>
                @endif
				@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                           @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                           @endforeach
                        </ul>
                    </div>
                @endif
					<div id="formFree" >
				<!-- Form 1 -->
	
			<form method="post" action="{{url('verif-mail-pers')}}" >
                  @csrf     
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="email" class="input-text with-border" name="email"placeholder=" Addresse Email"/>
					</div>
				     <input type="submit" class="inputButton" value="lien de réinitialisation du mot de passe">
				</form>

				</div>
			</div>

		</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->
<!-- Scripts
================================================== -->
<script src="{{asset('template/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('template/js/jquery-migrate-3.1.0.min.html')}}"></script>
<script src="{{asset('template/js/mmenu.min.js')}}"></script>
<script src="{{asset('template/js/tippy.all.min.js')}}"></script>
<script src="{{asset('template/js/simplebar.min.js')}}"></script>
<script src="{{asset('template/js/bootstrap-slider.min.js')}}"></script>
<script src="{{asset('template/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('template/js/snackbar.js')}}"></script>
<script src="{{asset('template/js/clipboard.min.js')}}"></script>
<script src="{{asset('template/js/counterup.min.js')}}"></script>
<script src="{{asset('template/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('template/js/slick.min.js')}}"></script>
<script src="{{asset('template/js/custom.js')}}"></script>


<!-- Leaflet // Docs: https://leafletjs.com/ -->
<script src="{{asset('template/js/leaflet.min.js')}}"></script>

<!-- Leaflet Geocoder + Search Autocomplete // Docs: https://github.com/perliedman/leaflet-control-geocoder -->
<script src="{{asset('template/js/leaflet-autocomplete.js')}}"></script>
<script src="{{asset('template/js/leaflet-control-geocoder.js')}}"></script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2020 13:37:17 GMT -->
</html>