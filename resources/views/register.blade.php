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
<!-- Header Container / End -->



<!-- Intro Banner
================================================== -->
<div class="intro-banner dark-overlay" data-background-image="{{asset('template/images/home-background-02.jpg')}}">

	<!-- Transparent Header Spacer -->
	<div class="transparent-header-spacer"></div>

	<div class="container">
		<div class="row">
			<h2>Créer votre compte</h2>
		</div>
		        <div class="row">
                    <div class="col-lg-6 mx-auto">
                        @if ($errors->any())
                          <div class="alert alert-danger">
                             <ul>
                               @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                               @endforeach
                             </ul>
                          </div>
                        @endif
		   			<div id="formEmp" style="display: none;">	
           			<form method="post" id="register-account-form" action="{{url('signuppers')}}" >
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
						
							<i ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-lines-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
	</svg></i>
							<input type="number" class="input-text with-border" name="cin"placeholder="Cin"/>
						</div>
						 <div class="input-with-icon-left">
							<i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
	  <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
	</svg></i>
							<input type="text" class="input-text with-border" name="nom"placeholder="Nom"/>
						</div>
						<div class="input-with-icon-left">
							<i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
	  <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
	</svg></i>
							<input type="text" class="input-text with-border" name="prenom"placeholder="Prenom"/>
						</div>
						<div class="input-with-icon-left">
							<i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							   <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
	</svg></i>
							<input type="text" class="input-text with-border" name="nom_societe"  placeholder="Nom de la société"/>
						</div>
						<div class="input-with-icon-left">
							<i class="icon-material-baseline-mail-outline"></i>
							<input type="email" class="input-text with-border" name="email"placeholder=" Addresse Email"/>
						</div>
	
						<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
							<i class="icon-material-outline-lock"></i>
							<input type="password" class="input-text with-border" name="password" id="password-register" placeholder="Mot de passe"/>
						</div>
						<div class="input-with-icon-left">
						<i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></i>
						<input type="text" class="input-text with-border" name="address"placeholder="Adresse"/>
					</div>
					<div class="input-with-icon-left">
						<i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
</svg></i>
						<input type="tel" class="input-text with-border" name="telephone"placeholder="Telephone"/>
					</div>
					<div class="input-with-icon-left">
						<i ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-month" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
  <path d="M2.56 11.332L3.1 9.73h1.984l.54 1.602h.718L4.444 6h-.696L1.85 11.332h.71zm1.544-4.527L4.9 9.18H3.284l.8-2.375h.02zm5.746.422h-.676V9.77c0 .652-.414 1.023-1.004 1.023-.539 0-.98-.246-.98-1.012V7.227h-.676v2.746c0 .941.606 1.425 1.453 1.425.656 0 1.043-.28 1.188-.605h.027v.539h.668V7.227zm2.258 5.046c-.563 0-.91-.304-.985-.636h-.687c.094.683.625 1.199 1.668 1.199.93 0 1.746-.527 1.746-1.578V7.227h-.649v.578h-.019c-.191-.348-.637-.64-1.195-.64-.965 0-1.64.679-1.64 1.886v.34c0 1.23.683 1.902 1.64 1.902.558 0 1.008-.293 1.172-.648h.02v.605c0 .645-.423 1.023-1.071 1.023zm.008-4.53c.648 0 1.062.527 1.062 1.359v.253c0 .848-.39 1.364-1.062 1.364-.692 0-1.098-.512-1.098-1.364v-.253c0-.868.406-1.36 1.098-1.36z"/>
</svg></i>
						<input type="date" class="input-text with-border" name="date_naissance" id="password-repeat-register" placeholder="Date de naissance"/>
					</div>
						<div class="input-with-icon-left">
							<i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-asterisk" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
	</svg></i>
							<input type="text" class="input-text with-border" name="domaine"  placeholder="Domaine"/>
						</div>
						 <input type="submit"name="inscription"value="S'inscrire">
					</form>
					</div>

					<div id="formFree" >
				<!-- Form 1 -->
	
			<form method="post" action="{{url('signup')}}" >
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
					
						<i ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-lines-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
</svg></i>
						<input type="number" class="input-text with-border" name="cin" placeholder="Cin"/>
					</div>
				     <div class="input-with-icon-left">
						<i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></i>
						<input type="text" class="input-text with-border" name="nom" placeholder="Nom"/>
					</div>
					<div class="input-with-icon-left">
						<i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></i>
						<input type="text" class="input-text with-border" name="prenom"placeholder="Prenom"/>
					</div>
					
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="email" class="input-text with-border" name="email"placeholder=" Addresse Email"/>
					</div>

					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password"placeholder="Mot de passe"/>
					</div>
                     <div class="input-with-icon-left">
						<i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></i>
						<input type="text" class="input-text with-border" name="address"placeholder="Adresse"/>
					</div>
					<div class="input-with-icon-left">
						<i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
</svg></i>
						<input type="phone" class="input-text with-border" name="telephone" placeholder="Telephone"/>
					</div>
					<div class="input-with-icon-left">
						<i ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-month" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
  <path d="M2.56 11.332L3.1 9.73h1.984l.54 1.602h.718L4.444 6h-.696L1.85 11.332h.71zm1.544-4.527L4.9 9.18H3.284l.8-2.375h.02zm5.746.422h-.676V9.77c0 .652-.414 1.023-1.004 1.023-.539 0-.98-.246-.98-1.012V7.227h-.676v2.746c0 .941.606 1.425 1.453 1.425.656 0 1.043-.28 1.188-.605h.027v.539h.668V7.227zm2.258 5.046c-.563 0-.91-.304-.985-.636h-.687c.094.683.625 1.199 1.668 1.199.93 0 1.746-.527 1.746-1.578V7.227h-.649v.578h-.019c-.191-.348-.637-.64-1.195-.64-.965 0-1.64.679-1.64 1.886v.34c0 1.23.683 1.902 1.64 1.902.558 0 1.008-.293 1.172-.648h.02v.605c0 .645-.423 1.023-1.071 1.023zm.008-4.53c.648 0 1.062.527 1.062 1.359v.253c0 .848-.39 1.364-1.062 1.364-.692 0-1.098-.512-1.098-1.364v-.253c0-.868.406-1.36 1.098-1.36z"/>
</svg></i>
						<input type="date" class="input-text with-border" name="date_naissance" placeholder="Date de naissance"/>
					</div>
					<ul >
		<h4> Vous Acceptez les conditions suivantes? </h4>
	<div>
	 <input type="checkbox"  value="newsletter"  id="checkme">
    <label for="checkme"> Le prix de l'abonnement mensuel n'est que de 5 dinars. Toutes taxes sont incluts (TVA et autres taxes applicables au jour de la commande), sauf indication contraire et hors frais de manutention et d'expédition.
	</label>
			</div>				
	

		</ul>
				     <input type="submit" name="inscription" name='sendNewSms' class='inputButton'   value="S'inscrire">
				</form>

				</div>
	</div>
</div>

</div>
<!-- Wrapper / End -->

<script> 
  var checker = document.getElementById('checkme');
 var sendbtn = document.getElementById('sendNewSms');
 // when unchecked or checked, run the function
 checker.onchange = function(){
if(this.checked){
    sendbtn.disabled = false;
} else {
    sendbtn.disabled = true;
}

}

</script>
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

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>

<!-- Leaflet // Docs: https://leafletjs.com/ -->
<script src="{{asset('template/js/leaflet.min.js')}}"></script>

<!-- Leaflet Geocoder + Search Autocomplete // Docs: https://github.com/perliedman/leaflet-control-geocoder -->
<script src="{{asset('template/js/leaflet-autocomplete.js')}}"></script>
<script src="{{asset('template/js/leaflet-control-geocoder.js')}}"></script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2020 13:37:17 GMT -->
</html>