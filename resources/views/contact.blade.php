@extends('layouts.master')
@section('content')
<body>
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
<div class="container">
	<div class="row">

		<div class="col-xl-12">
			<div class="contact-location-info margin-bottom-50">
				<div class="contact-address">
					<ul>
						<li class="contact-address-headline">Notre bureau</li>
						<li>rue 8002,a l'espace de Tunis,1073 Tunis,Tunisie</li>
						<li>Phone (+216) 51110112</li>
						<li><a href="#">support@mobi-sm.tn</a></li>
						<li>
							<div class="freelancer-socials">
								<ul>
									<li><a href="#" title="Dribbble" data-tippy-placement="top"><i class="icon-brand-dribbble"></i></a></li>
									<li><a href="#" title="Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
									<li><a href="#" title="Behance" data-tippy-placement="top"><i class="icon-brand-behance"></i></a></li>
									<li><a href="#" title="GitHub" data-tippy-placement="top"><i class="icon-brand-github"></i></a></li>
								
								</ul>
							</div>
						</li>
					</ul>

				</div>
				<div id="single-job-map-container">
					<div class="gmap_canvas">
<iframe width="500" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=rue%208002%2Cmont%20plaisir%2Ctunis&amp;t=m&amp;z=11&amp;output=embed&amp;iwloc=near" border="2" scrolling="no" marginheight="" marginwidth="0"></iframe>
				</div>
			</div>
		</div>
</div>
</div>
</div>
@endsection
</body>
</html>