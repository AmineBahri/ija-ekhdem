@extends('layouts.master')
@section('content')
<div class="margin-top-50"></div>
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

</div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
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
<!-- Spacer / End-->

@endsection