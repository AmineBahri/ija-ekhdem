<!DOCTYPE html>
<head>
<!-- Basic Page Needs
================================================== -->
<title> Ija ekhdem </title>
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
				
	

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">
					<li><a href="{{url('/')}}"><img src="{{asset('template/images/logo.png')}}" width="200px"height="40px"></a></li>
						<li><a href="{{url('/')}}" class="current">Acceuil</a></li>
						@if(Session::get('utilisateur'))
						<li><a href="{{url('/dashboard-user')}}">{{Session::get('utilisateur')['email']}}</a></li>
						<li><a href="{{url('/logout-user')}}">Déconnexion</a></li>
						@elseif(Session::get('personne'))
						<li><a href="{{url('/dashboard')}}">{{Session::get('personne')['email']}}</a></li>
						<li><a href="{{url('/logout')}}">Déconnexion</a></li>
						@else
						<li><a href="{{url('/login')}}">Authentification </a></li>
     					<li><a href="{{url('/register')}}"> Inscription</a></li>
     					@endif
						<li><a href="{{url('/contact')}}">Contact</a></li>
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Contactez nous!</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Acceuil</a></li>
						<li>Contact</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">


			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Nous sommes ravis de vous Contacter!</h3>
				</div>
				    @if (count($errors) > 0)
                       <div class="alert alert-danger">
                         <button type="button" class="close" data-dismiss="alert">×</button>
                          <ul>
                           @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                           @endforeach
                          </ul>
                        </div>
                    @endif
                @if(Session::has('message envoyé'))
                  <div class="alert alert-danger">
                  	{{Session::get('message envoyé')}}
                  </div>
                @endif
				<!-- Form -->
				<form method="post" action="{{url('send-message')}}" enctype="multipart/form-data">
				@csrf
					 <!-- Account Type -->
					 <div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="name" placeholder=" Votre Nom"/>
					</div>
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="email" class="input-text with-border" name="email" placeholder=" Addresse Email"/>
					</div>

					<div class="input-with-icon-left">
                    <i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="sujet"  placeholder="Sujet"/>
					</div>
                    <div class="input-with-icon-left">
						<textarea class="input-text with-border" name="message"  placeholder="Message"></textarea>
					</div>
				 <input type="submit" name="Envoyer" value="Envoyer"/> 
				
				 
				</form>
				
			</div>

		</div>
	</div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->



</div>
<!-- Wrapper / End -->

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
</body>
</html>