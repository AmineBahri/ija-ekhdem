@extends('layouts.master')
@section('content')
<body>
	<div class="margin-top-15"></div>
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
<div class="container">
	<div class="row">
		
		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">

			<div class="single-page-section">

				<h1 class="margin-bottom-25">{{$offre->titre_offre}}</h1>
				<h3 class="margin-bottom-25">Description de l'offre</h3>
				<p>{{$offre->description_offre}}</p>
			</div>

			<div class="single-page-section">
				<h3 class="margin-bottom-30">Image</h3>
				<div id="single-job-map-container">
					<img src="{{asset('template/images/'.$offre->image)}}" width="150" height="150">
					<div id="singleListingMap" data-latitude="51.507717" data-longitude="-0.131095" data-map-icon="im im-icon-Hamburger"></div>
					<!--<a href="#" id="streetView">Adresse map</a>-->
				</div>
			</div>

			<div class="single-page-section">
			
				

					<!-- Listings Container / End -->

				</div>
		</div>
		

		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">

				
					
				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
					<div class="job-overview">
						<div class="job-overview-headline">Offre détails</div>
						<div class="job-overview-inner">
							<ul>
								<li>
									<i class="icon-material-outline-location-on"></i>
									<span>L'emplacement</span>
									<h5>{{$offre->emplacement}}</h5>
								</li>
								<li>
									<i class="icon-material-outline-business-center"></i>
									@foreach($typeOffre as $value)
									  @if ($offre->type_id == $value->id)
										<span>{{$value->name}}</span>
									  @endif
						            @endforeach
								</li>
								<li>
									<i class="icon-material-outline-local-atm"></i>
									<span>Salaire</span>
									<h5>{{$offre->salaire_min}} - {{$offre->salaire_max}}</h5>
								</li>
								<li>
									<i class="icon-material-outline-access-time"></i>
									<span>Date de publication</span>
									<h5>{{$offre->date_publication}}</h5>
								</li>
								  <a href="{{url('postuler',$offre->id)}}" id="snackbar-place-bid" class="button ripple-effect move-on-hover full-width margin-top-30"><span>Postuler</span></a>
							</ul>
						</div>
					</div>
				</div>

				<!-- Sidebar Widget -->
				

			</div>
		</div>

	</div>
</div>


@endsection
</body>
<!-- Spacer / End-->