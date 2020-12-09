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
					<a href="{{url('/')}}"><img src="{{asset('template/images/logo.png')}}" data-sticky-logo="{{asset('template/images/logo.png')}}" data-transparent-logo="{{asset('template/images/logo.png')}}" alt=""></a>
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
                 <div class="alert alert-danger" role="alert">
                   {{ Session::get('status') }}
                 </div>
                @endif
                <style type="text/css">
                	.alert-danger
                	{
                       text-align: center;
                       color: red;
                	}
                </style>
				@if ($errors->any())
                   <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                @endif
				<!-- Form -->
                 <div id="formEmp" style="display: none;">	
           			<form method="post" id="register-account-form" action="{{url('signinp')}}" >
	                   <!-- Account Type -->
	                   @csrf
				<div class="account-type">
					<div>
						<input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" value="freelance" checked/>
						<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Freelancer</label>
					</div>

					<div>
						<input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio" value="employeur"/>
						<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Employeur</label>
					</div>
				</div>
						<div class="input-with-icon-left">
							<i class="icon-material-baseline-mail-outline"></i>
							<input type="email" class="input-text with-border" name="email"placeholder=" Addresse Email"/>
						</div>
	
						<div class="input-with-icon-left" title="Votre mot de passe doit etre de 8 characters et contient au moins une lettre aplhabétique et un chiffre" data-tippy-placement="bottom">
							<i class="icon-material-outline-lock"></i>
							<input type="password" class="input-text with-border" name="password" id="password-register" placeholder="Mot de passe"/>
						</div>
						 <input type="submit" class="inputButton" value="Se connecter">
						<br> <a href="{{url('forget-password-pers')}}">Mot de passe oublié?</a>
					</form>
					</div>
				
					<div id="formFree" >
				<!-- Form 1 -->
	
			<form method="post" action="{{url('signin')}}" >
                  @csrf     
				<!-- Account Type -->
				<div class="account-type">
					<div>
						<input type="radio" name="account-type-radio" class="account-type-radio" value="freelance" checked/>
						<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Freelancer</label>
					</div>

					<div>
						<input type="radio" name="account-type-radio" class="account-type-radio" value="employeur"/>
						<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Employeur</label>
					</div>
				</div>
					
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="email" class="input-text with-border" name="email"placeholder=" Addresse Email"/>
					</div>

					<div class="input-with-icon-left" title="Votre mot de passe doit etre de 8 characters et contient au moins une lettre aplhabétique et un chiffre" data-tippy-placement="bottom">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password"placeholder="Mot de passe"/>
					</div>
				     <input type="submit" class="inputButton" value="Se connecter">
				     <br> <a href="{{url('forget-password-user')}}">Mot de passe oublié?</a>
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
<script>
	var rad = document.getElementsByName('account-type-radio');
	
	var prev = "";
	for (var i = 0; i < rad.length; i++) {
    rad[i].addEventListener('change', function() {
		//(prev) ? console.log(prev.value): null;
		
		console.log(i);
		
		if(prev !== null)
		{
			//console.log(prev.value);
			if(prev.value == "employeur")
			{
				document.getElementById("formFree").style.display = "block";
				document.getElementById("formEmp").style.display = "none";
				console.log(prev.value);
			}else 
			{
				
				document.getElementById("formEmp").style.display = "block";
				document.getElementById("formFree").style.display = "none";
				console.log(prev.value);
			}
		}

        if (this !== prev) {
            prev = this;
		}
		
    });
}
	
</script>