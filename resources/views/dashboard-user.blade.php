<!DOCTYPE html>

<head>

<!-- Basic Page Needs ================================================== -->
<title>IJA EKDEM</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{asset('template/css/style.css')}}">
<link rel="stylesheet" href="{{asset('template/css/colors/blue.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
					<a href="{{url('/')}}"><img src="{{asset('template/images/logo.png')}}" alt=""></a>
				</div>
						<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">
					  <form method="post" action="{{url('user-search')}}">
					  	@csrf
						<li>
							<input type="text" placeholder="Rechercher un offre" name="offer_title">
						</li>
						<li>
							<input type="text" placeholder="emplacement" name="emplacement">
						</li>
				        <li>
						  <button type="submit" class="button ripple-effect">Rechercher</button>
				        </li>
				       </form>
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
									<span>Freelanceur</span>
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
							<li><a href="{{url('dashboard-user')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="{{url('parametres-user')}}"><i class="icon-material-outline-settings"></i> Paramètres</a></li>
							<li><a href="{{url('logout-user')}}"><i class="icon-material-outline-power-settings-new"></i>Logout</li>
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
						<ul data-submenu-title="Gestion des projets">
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Gérer mes projets</a>
								<ul>
									<li><a href="{{url('add-project')}}">Ajouter un projet</a></li>
									<li><a href="{{url('list-project')}}">Consulter ma liste des projets</a></li>
								</ul>	
							</li>
						</ul>
						<ul data-submenu-title="Mon Compte">
							<li><a href="{{url('parametres-user')}}"><i class="icon-material-outline-settings"></i> Paramètres</a></li>
							<li><a href="{{url('logout-user')}}"><i class="icon-material-outline-power-settings-new"></i>Déconnexion</a></li>
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
				<h3><i class="icon-feather-folder">
					
				</i> Ma liste des candidatures</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Acceuil</a></li>
						<li><a href="#">Tableau de bord</a></li>
						<li>Ma liste des candidatures</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						@if ($errors->any())
                          <div class="alert alert-danger">
                             <ul>
                               @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                               @endforeach
                             </ul>
                          </div>
                        @endif
                        <table>
                        	<thead>
                        		<tr>
                        			<td>Titre Offre</td>
                        			<td>Type Offre</td>
                        			<td>Catégorie Offre</td>
                        			<td>Equipe</td>
                        			<td>Emplacement</td>
                        			<td>Date de publication</td>
                        			<td>Status</td>
                        		</tr>
                        	</thead>
                        	<tbody>
                        		@foreach ($offres as $offre)
                        		<tr>
                        			<td>{{$offre->titre_offre}}</td>
                        			<td>{{$offre->type->name}}</td>
                        			<td>{{$offre->category->name}}</td>
                        			<td>{{$offre->equipe->name}}</td>
                        			<td>{{$offre->emplacement}}</td>
                        			<td>{{$offre->date_publication}}</td>
                        			@if ($offre->pivot->status == "0")
                        			  <td>refusé</td>
                        			@elseif ($offre->pivot->status == "1")
                                      <td>en cours d'examen</td>
                                    @else
                                     <td>accepté</td>
                                    @endif
                        		</tr>
                        		@endforeach
                        	</tbody>
                        </table>
                        
                         
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
</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/dashboard-post-a-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2020 13:39:07 GMT -->
</html>