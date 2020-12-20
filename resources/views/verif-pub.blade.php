@extends('layouts.master')
@section('content')
<body>
	<div class="container">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">


			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Envoyer votre pub à l'administrateur!</h3>
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
				<!-- Form -->
				<form method="post" action="{{url('send-pub',$produit->id)}}" enctype="multipart/form-data">
				@csrf
					 <!-- Account Type -->
					 <div class="intro-search-field">
						<input type="text" class="input-text with-border" name="produit" value="{{$produit->description}}" />
					</div>

					<div class="intro-search-field">
						<input type="file" class="input-text with-border" name="file"/>
					</div>

				 <input type="submit" name="Envoyer" value="Envoyer"/> 

				</form>
				
			</div>

		</div>
	</div>
</div>
@endsection
</body>