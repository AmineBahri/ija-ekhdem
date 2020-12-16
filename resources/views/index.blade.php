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
		
		<!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline">
					<h3>
						<strong>Embauchez des experts indépendants pour n'importe quel travail, à tout moment.</strong>
						<br>
						<span>Trouver des designers, développeurs et créatifs prêts pour votre projet.</span>
					</h3>
				</div>
			</div>
		</div>
		@if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
		<!-- Search Bar -->
		<form action="{{url('search')}}" method="post">
			@csrf
		<div class="row">
			<div class="col-md-12">
				<div class="intro-banner-search-form margin-top-95">

					<!-- Search Field -->
					<div class="intro-search-field">
						<label for ="intro-keywords" class="field-title ripple-effect">Ce que vous voulez cherchez?</label>
						<input id="intro-keywords" type="text" placeholder="Rechercher" name="offer_title">
						<i class="icon-material-outline-search"></i>
					</div>

					<!-- Search Field -->
					<div class="intro-search-field with-autocomplete">
						<label for="autocomplete-input" class="field-title ripple-effect">Où?</label>
						<div class="input-with-icon">
							<input id="autocomplete-input" type="text" placeholder="Emplacement" name="emplacement">
							<i class="icon-material-outline-location-on"></i>
						</div>
					</div>

					<!-- Search Field -->
					<div class="intro-search-field">
						<select class="selectpicker default" name="category_id" title="Tous les Categories">
						 @foreach($categories as $item)
							<option value="{{$item->id}}">{{$item->name}}</option>
						 @endforeach
						</select>
					</div>

					<!-- Button -->
					<div class="intro-search-button">
						<button type="submit" class="button ripple-effect">Rechercher</button>
					</div>
				</div>
			</div>
		</div>
	   </form>
		<!-- Stats -->
		<div class="row">
			<div class="col-md-12">
				<ul class="intro-stats margin-top-45 hide-under-992px">
				<li>
					<strong class="counter">{{$offre}}</strong>
						<span>Offre d'emplois</span>
					</li>
					<li>
						<strong class="counter">{{$personne}}</strong>
						<span>Entreprises</span>
					</li>
					<li>
						<strong class="counter">{{$user}}</strong>
						<span>Freelancers</span>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>


<!-- Content
================================================== -->

<!-- Popular Job Categories -->
<div class="section margin-top-65 margin-bottom-30">
	<div class="container">
		<div class="row">

			<!-- Section Headline -->
			<div class="col-xl-12">
				<div class="section-headline centered margin-top-0 margin-bottom-45">
					<h3>Toutes les Categories</h3>
				</div>
			</div>
            @foreach($categories as $item)
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				@if($item->name == "Instagram")
				 <a href="{{url('offre-instagram',$item->id)}}" class="photo-box small" data-background-image="{{asset('template/images/instagram.jpg')}}">
					<div class="photo-box-content">
						<h3>{{$item->name}}</h3>
						<span>{{ App\Models\ProductInstagram::where('categories_id',$item->id)->count() }}</span>
					</div>
				</a>
				@elseif($item->name == "Comptabilité et finance")
				 <a href="{{url('offre-categorie',$item->id)}}" class="photo-box small" data-background-image="{{asset('template/images/comptabilite.jpg')}}">
					<div class="photo-box-content">
						<h3>{{$item->name}}</h3>
						<!--<span>{{$calcul}}</span>-->
						<span>{{ App\Models\OffreEmploi::where('categories_id',$item->id)->count() }}</span>
					</div>
				 </a>
				@elseif($item->name == "Bureau et saisie de données")
				 <a href="{{url('offre-categorie',$item->id)}}" class="photo-box small" data-background-image="{{asset('template/images/job-category-07.jpg')}}">
					<div class="photo-box-content">
						<h3>{{$item->name}}</h3>
						<!--<span>{{$calcul}}</span>-->
						<span>{{ App\Models\OffreEmploi::where('categories_id',$item->id)->count() }}</span>
					</div>
				 </a>
				@elseif($item->name == "Conseil")
				 <a href="{{url('offre-categorie',$item->id)}}" class="photo-box small" data-background-image="{{asset('template/images/conseil.png')}}">
					<div class="photo-box-content">
						<h3>{{$item->name}}</h3>
						<!--<span>{{$calcul}}</span>-->
						<span>{{ App\Models\OffreEmploi::where('categories_id',$item->id)->count() }}</span>
					</div>
				 </a>
				@elseif($item->name == "Ressources humaines")
				 <a href="{{url('offre-categorie',$item->id)}}" class="photo-box small" data-background-image="{{asset('template/images/ressources.jpg')}}">
					<div class="photo-box-content">
						<h3>{{$item->name}}</h3>
						<!--<span>{{$calcul}}</span>-->
						<span>{{ App\Models\OffreEmploi::where('categories_id',$item->id)->count() }}</span>
					</div>
				 </a>
				@elseif($item->name == "Informatique et ordinateurs")
				 <a href="{{url('offre-categorie',$item->id)}}" class="photo-box small" data-background-image="{{asset('template/images/job-category-01.jpg')}}">
					<div class="photo-box-content">
						<h3>{{$item->name}}</h3>
						<!--<span>{{$calcul}}</span>-->
						<span>{{ App\Models\OffreEmploi::where('categories_id',$item->id)->count() }}</span>
					</div>
				 </a>
				@elseif($item->name == "La gestion")
				 <a href="{{url('offre-categorie',$item->id)}}" class="photo-box small" data-background-image="{{asset('template/images/gestion.jpg')}}">
					<div class="photo-box-content">
						<h3>{{$item->name}}</h3>
						<!--<span>{{$calcul}}</span>-->
						<span>{{ App\Models\OffreEmploi::where('categories_id',$item->id)->count() }}</span>
					</div>
				 </a>
				@else
				<a href="{{url('offre-categorie',$item->id)}}" class="photo-box small" data-background-image="{{asset('template/images/job-category-01.jpg')}}">
					<div class="photo-box-content">
						<h3>{{$item->name}}</h3>
						<!--<span>{{$calcul}}</span>-->
						<span>{{ App\Models\OffreEmploi::where('categories_id',$item->id)->count() }}</span>
					</div>
				</a>
				@endif
			</div>
			@endforeach
		</div>
	</div>
</div>
<!-- Features Cities / End -->



<!-- Features Jobs -->
<div class="section gray margin-top-45 padding-top-65 padding-bottom-75">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				
				<!-- Section Headline -->
				<div class="section-headline margin-top-0 margin-bottom-35">
					<h3>Offres récentes</h3>
					<a href="tasks-list-layout-1.html" class="headline-link">Parcourir toutes les offres</a>
				</div>
				
				<!-- Jobs Container -->
				<div class="tasks-list-container compact-list margin-top-35">
						
					<!-- Task -->
					@foreach ($offreDetails as $detail)
					<a href="{{url('consulter-offre',$detail->id)}}" class="task-listing">

						<!-- Job Listing Details -->
						<div class="task-listing-details">

							<!-- Details -->
							<div class="task-listing-description">
								<h3 class="task-listing-title">{{$detail->titre_offre}}</h3>
								<ul class="task-icons">
									<li><i class="icon-material-outline-location-on"></i>{{$detail->emplacement}}</li>
									<li><i class="icon-material-outline-access-time"></i>{{$detail->date_publication}}</li>
								</ul>
								<div class="task-tags margin-top-15">
								 @foreach($categories as $item)
							        @if ($detail->categories_id == $item->id)
										<span>{{$item->name}}</span>	
								    @endif
						         @endforeach
								</div>
							</div>

						</div>

						<div class="task-listing-bid">
							<div class="task-listing-bid-inner">
								
								<span class="button button-sliding-icon ripple-effect">Postuler maintenant <i class="icon-material-outline-arrow-right-alt"></i></span>
							</div>
						</div>
					</a>
                    @endforeach
					
				</div>
				<!-- Jobs Container / End -->
            <span style="text-align: center;">{{$offreDetails->links()}}</span>

            <style type="text/css">
	         .w-5
	         {
		        display: none;
	         }
            </style>
			</div>
		</div>
	</div>
</div>
<!-- Featured Jobs / End -->

<!-- Icon Boxes -->
<div class="section padding-top-65 padding-bottom-65">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline centered margin-top-0 margin-bottom-5">
					<h3>Comment il travail?</h3>
				</div>
			</div>
			
			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box with-line">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class="icon-line-awesome-lock"></i>
							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
						</div>
					</div>
					<h3>Créer un compte</h3>
					<p>Apportez à la table des stratégies de survie gagnant-gagnant pour assurer une domination proactive à l'avenir.</p>
				</div>
			</div>

			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box with-line">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class="icon-line-awesome-legal"></i>
							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
						</div>
					</div>
					<h3> Publier une tâche </h3>
					<p>Libérez efficacement des informations multimédias sans. Optimiser rapidement le retour sur investissement.</p>
				</div>
			</div>

			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class=" icon-line-awesome-trophy"></i>
							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
						</div>
					</div>
					<h3>Choisir un Expert</h3>
					<p>L'immersion nanotechnologique le long de l'autoroute de l'information fermera la boucle en se concentrant.</p>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- Icon Boxes / End -->


<!-- Testimonials -->
<div class="section gray padding-top-65 padding-bottom-55">
	
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline centered margin-top-0 margin-bottom-5">
					<h3>Témoignages</h3>
				</div>
			</div>
		</div>
	</div>

	<!-- Categories Carousel -->
	<div class="fullwidth-carousel-container margin-top-20">
		<div class="testimonial-carousel testimonials">

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial-avatar">
						<img src="{{asset('template/images/user-avatar-small-02.jpg')}}" alt="">
					</div>
					<div class="testimonial-author">
						<h4>Sindy Forest</h4>
						 <span>Freelancer</span>
					</div>
					<div class="testimonial">Devenir ingénieur permet de travailler dans une multitude de secteurs : construction surtout, mais aussi industrie, agroalimentaire, énergie, transport, environnement.</div>
				</div>
			</div>

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial-avatar">
						<img src="{{asset('template/images/user-avatar-small-01.jpg')}}" alt="">
					</div>
					<div class="testimonial-author">
						<h4>Tom Smith</h4>
						 <span>Freelancer</span>
					</div>
					<div class="testimonial">Devenir ingénieur permet de travailler dans une multitude de secteurs : construction surtout, mais aussi industrie, agroalimentaire, énergie, transport, environnement.</div>
				</div>
			</div>

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial-avatar">
						<img src="{{asset('template/images/user-avatar-placeholder.png')}}" alt="">
					</div>
					<div class="testimonial-author">
						<h4>Sebastiano Piccio</h4>
						 <span>Employer</span>
					</div>
					<div class="testimonial">Devenir ingénieur permet de travailler dans une multitude de secteurs : construction surtout, mais aussi industrie, agroalimentaire, énergie, transport, environnement.</div>
				</div>
			</div>

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial-avatar">
						<img src="{{asset('template/images/user-avatar-small-03.jpg')}}" alt="">
					</div>
					<div class="testimonial-author">
						<h4>David Peterson</h4>
						 <span>Freelancer</span>
					</div>
					<div class="testimonial">Je cherchais un métier qui me permettrait de mener défis techniques et humains de front.</div>
				</div>
			</div>

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial-avatar">
						<img src="{{asset('template/images/user-avatar-placeholder.png')}}" alt="">
					</div>
					<div class="testimonial-author">
						<h4>Marcin Kowalski</h4>
						 <span>Freelancer</span>
					</div>
					<div class="testimonial">La technicité, l'autonomie requise et les coûts importants associés à certains équipements modernes amènent parfois le remplacement de techniciens ou de professionnels qualifiés par des ingénieurs.</div>
				</div>
			</div>

		</div>
	</div>
	<!-- Categories Carousel / End -->

</div>
<!-- Testimonials / End -->


<!-- Counters -->
<div class="section padding-top-70 padding-bottom-75">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<div class="counters-container">
					
					<!-- Counter -->
					<div class="single-counter">
						<i class="icon-line-awesome-suitcase"></i>
						<div class="counter-inner">
							<h3><span class="counter">1,586</span></h3>
							<span class="counter-title">Offre d'emploi</span>
						</div>
					</div>

					<!-- Counter -->
					<div class="single-counter">
						<i class="icon-line-awesome-legal"></i>
						<div class="counter-inner">
							<h3><span class="counter">3,543</span></h3>
							<span class="counter-title">Tâches publiées</span>
						</div>
					</div>

					<!-- Counter -->
					<div class="single-counter">
						<i class="icon-line-awesome-user"></i>
						<div class="counter-inner">
							<h3><span class="counter">2,413</span></h3>
							<span class="counter-title">Membres actifs</span>
						</div>
					</div>

					<!-- Counter -->
					<div class="single-counter">
						<i class="icon-line-awesome-trophy"></i>
						<div class="counter-inner">
							<h3><span class="counter">99</span>%</h3>
							<span class="counter-title">Taux de satisfaction</span>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Counters / End -->


<!-- Footer
================================================== -->
<div id="footer">
	
	<!-- Footer Top Section -->
	<div class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<!-- Footer Rows Container -->
					<div class="footer-rows-container">
						
						<!-- Left Side -->
						<div class="footer-rows-left">
							<div class="footer-row">
								<div class="footer-row-inner footer-logo">
									<img src="{{asset('template/images/logo.png')}}" alt="">
								</div>
							</div>
						</div>
						
						<!-- Right Side -->
						<div class="footer-rows-right">

							<!-- Social Icons -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<ul class="footer-social-links">
										<li>
											<a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-linkedin-in"></i>
											</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>
							
							<!-- Language Switcher -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">
										<option selected>Français</option>
										<option>English</option>
										<option>Español</option>
										<option>Deutsch</option>
									</select>
								</div>
							</div>
						</div>

					</div>
					<!-- Footer Rows Container / End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Top Section / End -->

	<!-- Footer Middle Section -->
	<div class="footer-middle-section">
		<div class="container">
			<div class="row">

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Espace Candidats</h3>
						<ul>
							<li><a href="#"><span>Parcourir les emplois</span></a></li>
							<li><a href="#"><span>Ajouter un CV</span></a></li>
							<li><a href="#"><span>Alertes d'emploi</span></a></li>
							<li><a href="#"><span>Mes marque-pages</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Espace Entreprises</h3>
						<ul>
							<li><a href="#"><span>Parcourir les candidats</span></a></li>
							<li><a href="#"><span>Publier une offre</span></a></li>
							<li><a href="#"><span>Publier une tâche</span></a></li>
							<li><a href="#"><span>Plans et prix</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Liens d'Aides</h3>
						<ul>
							<li><a href="#"><span>Contact</span></a></li>
							<li><a href="#"><span>Politique de confidentialité</span></a></li>
							<li><a href="#"><span>Conditions de notre part</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Compte</h3>
						<ul>
							<li><a href="#"><span>Inscrivez Vous</span></a></li>
							<li><a href="#"><span>Authentification</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Newsletter -->
				<div class="col-xl-4 col-lg-4 col-md-12">
					<h3><i class="icon-feather-mail"></i> Créer une compte pour nous contacté </h3>
					<p>Vous cherché une métier.</p>
					<form action="#" method="get" class="newsletter">
						<input type="text" name="fname" placeholder="Entré votre addresse email">
						<button type="submit"><i class="icon-feather-arrow-right"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Middle Section / End -->
	
	<!-- Footer Copyrights -->
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyrights / End -->

</div>
<!-- Footer / End -->

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