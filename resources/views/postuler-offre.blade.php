@extends('layouts.master')
@section('content')
<body>
	<div class="margin-top-15"></div>

    @if ($errors->any())
     <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
     </div>
    @endif
<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Poster pour {{$offre->titre_offre}}</h3>


				<!-- Breadcrumbs -->
				<div class="margin-top-10"></div>

			         <div class="row">

   
				   
				     <div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						
						<form action="{{url('confirm-offre',$offre->id)}}" method="post" enctype="multipart/form-data">
				         @csrf
						<div class="content with-padding padding-bottom-10">
							<div class="row">
								<div class="col-xl-4">
									<div class="submit-field">
										<h5> Adresse Email</h5>
										<input type="text" class="with-border" name="email" id="adresse" value="{{$infoUser->email}}">
									</div>
								</div>

								<div class="uploadButton margin-top-30">
								  <input type="file" name="file"/>
									<span class="uploadButton-file-name">Entrer votre CV version PDF*</span>
								</div>

								
								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Lettre de motivation pour agrandir votre chance</h5>
										<textarea cols="30" rows="5"  name="description" id="description" class="with-border"></textarea>
										
									</div>
								</div>

							</div>
						</div>
					
					<input type="submit" value="Postuler">
					</form>
					</div>

				</div>

				
			</div>
			<!-- Row / End -->

			

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->
@endsection