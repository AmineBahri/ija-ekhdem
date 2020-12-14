<!DOCTYPE html>

<head>

<!-- Basic Page Needs
================================================== -->
<title>IJA EKDEM</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{asset('template/css/style.css')}}">
<link rel="stylesheet" href="{{asset('template/css/colors/blue.css')}}">

</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth dashboard-header not-sticky">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="{{url('index')}}"><img src="{{asset('template/images/logo.png')}}" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li><a href="{{url('index')}}">Acceuil</a>
							<ul class="dropdown-nav">
								<li><a href="{{url('index')}}">Acceuil</a></li>
							</ul>
						</li>
						<li><a href="#" class="current">Tableau de bord</a>
							<ul class="dropdown-nav">
								<li><a href="{{url('dashboard')}}">Tableau de bord</a></li>
								<li><a href="">Gérer les offres</a>
									<ul class="dropdown-nav">
										<li><a href="{{url('addoffre')}}"> Publier un offre</a></li>
										<li><a href="{{url('dashboard')}}"> Consulter la liste des offres</a></li>
										
									
									</ul>
								</li>
							<a href="{{url('parametres')}}">Paramètres</a>
							</ul>
						</li>
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">

	            <!--  User Notifications / End -->

				<!-- User Menu -->
				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger">
							<a href="#"><div class="user-avatar status-online"><img src="{{asset('template/images/user-avatar-small-01.jpg')}}" alt=""></div></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<div class="user-details">
									<div class="user-avatar status-online"><img src="{{asset('template/images/user-avatar-small-01.jpg')}}" alt=""></div>
									<div class="user-name">
									<span>Employeur</span>
									</div>
								</div>
								
								<!-- User Status Switcher -->
								<div class="status-switch" id="snackbar-user-status">
									<label class="user-online current-status">Online</label>
									<label class="user-invisible">Invisible</label>
									<!-- Status Indicator -->
									<span class="status-indicator" aria-hidden="true"></span>
								</div>	
						</div>
						
						<ul class="user-menu-small-nav">
							<li><a href="{{url('dashboard')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="{{url('parametres')}}"><i class="icon-material-outline-settings"></i> Paramètres</a></li>
							<li><a href="{{url('logout')}}"><i class="icon-material-outline-power-settings-new"></i>Logout</li>
						</ul>

						</div>
					</div>

				</div>
				<!-- User Menu / End -->

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">
						<ul data-submenu-title="Manage Accounts">
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Gérer les offres</a>
								<ul>
									<li><a href="{{url('addoffre')}}">Publier un offre </a></li>
									<li><a href="{{url('dashboard')}}">Consulter la liste des offres </a></li>
								</ul>	
							</li>
						</ul>

						<ul data-submenu-title="Mon Compte">
							<li><a href="{{url('parametres')}}"><i class="icon-material-outline-settings"></i> Paramètres</a></li>
							<li><a href="{{url('logout')}}"><i class="icon-material-outline-power-settings-new"></i>Déconnexion</a></li>
						</ul>
						
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->

	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Publier une offre</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Acceuil</a></li>
						<li><a href="#">Tableau de bord</a></li>
						<li>Publier une offre</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-feather-folder-plus"></i> Formulaire de soumission d'offre</h3>
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
                        <form action="{{url('storeoffre')}}" method="post" enctype="multipart/form-data">
                         	@csrf
						<div class="content with-padding padding-bottom-10">
							<div class="row">
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Titre d'offre</h5>
										<input type="text" class="with-border" name="titre_offre">
									</div>
								</div>
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Type d'offre</h5>
										<select name="type_offre"class="selectpicker with-border" title="Select Job Type">
											@foreach($type_offres as $value)
											<option value="{{$value->id}}">{{$value->name}}</option>
						                     @endforeach
										</select>
									</div>
								</div>
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Equipe de travail</h5>
										<select name="equipe" class="selectpicker with-border"  title="Select Job Team">
										@foreach($equipes as $equipe)
										 <option value="{{$equipe->id}}">{{$equipe->name}}</option>
						                     @endforeach
										</select>
									</div>
								</div>
                                </div>
								<div class="row">
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>La catégorie de l'offre</h5>
										<select name="categorie_offre"class="selectpicker with-border" title="Select Category">
											@foreach($category as $item)
											<option value="{{$item->id}}">{{$item->name}}</option>
						                     @endforeach
										</select>
									  </div>
								     </div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Emplacement</h5>
										<div class="input-with-icon">
											<div id="autocomplete-container">
												<input name="emplacement" class="with-border" type="text" placeholder="Type Address">
											</div>
											<i class="icon-material-outline-location-on"></i>
										</div>
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Salaire</h5>
										<div class="row">
											<div class="col-xl-6">
												<div class="input-with-icon">
													<input class="with-border" name="salaire_min" type="text" placeholder="Min">
													<i class="currency">DT</i>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="input-with-icon">
													<input class="with-border" name="salaire_max" type="text" placeholder="Max">
													<i class="currency">DT</i>
												</div>
											</div>
										</div>
									</div>
								</div>
                                </div>
                                <div class="row">
								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Mot clés<i class="help-icon" data-tippy-placement="right" ></i></h5>
										<div class="keywords-container">
											<input type="text" name="key_words" class="keyword-input with-border" placeholder="Entrer les mots clés correspond à l'offre"/>
										</div>
										<span style="color: red;">Les mots clés entrés doivent etre séparés par des virgules</span>
									</div>
								</div>
							</div>
								<div class="row">
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Nombre de poste   <i class="help-icon" data-tippy-placement="right" ></i></h5>
										<div class="keywords-container">
											<div class="keyword-input-container">
												<input type="text" name="nombre_poste"class="keyword-input with-border" placeholder="e.g. job title, responsibilites"/>
											</div>
											<div class="keywords-list"><!-- keywords go here --></div>
											<div class="clearfix"></div>
										</div>
                                       
									</div>
									
								
								</div>
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Durée   <i class="help-icon" data-tippy-placement="right" ></i></h5>
										<div class="keywords-container">
											<div class="keyword-input-container">
												<input type="text" name="durée" class="keyword-input with-border" placeholder="e.g. job title, responsibilites"/>
											
											</div>
											<div class="keywords-list"><!-- keywords go here --></div>
											<div class="clearfix"></div>
										</div>
                                       
									</div>
									
								
								</div>
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Date publication   <i class="help-icon" data-tippy-placement="right" ></i></h5>
										<div class="keywords-container">
											<div class="keyword-input-container">
												<input type="date" name="date_publication" class="keyword-input with-border"/>
												
											</div>
											<div class="keywords-list"><!-- keywords go here --></div>
											<div class="clearfix"></div>
										</div>
                                       
									</div>
									
								
								</div>
                                </div>
								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Description de l'offre</h5>
										<textarea cols="30" rows="5"name="description_offre" class="with-border"></textarea>
										<div class="uploadButton margin-top-30">
											<input name="file" type="file">
										</div>
									</div>
								</div>
								<div class="col-xl-12">
				                <input type="submit" name="publier_offre" value="Publier offre">
				                </div>
				            </div>
						</div>
					</div>
				</div>

				
               </form>
			</div>
			<!-- Row / End -->

			<!-- Footer -->
			
			

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

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

<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);

		if ($('.submit-field')[0]) {
		    setTimeout(function(){ 
		        $(".pac-container").prependTo("#autocomplete-container");
		    }, 300);
		}
	}
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places"></script>


</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/dashboard-post-a-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2020 13:39:07 GMT -->
</html>