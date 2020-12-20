@extends('layouts.master')
@section('content')
<body>

	<div class="margin-top-50"></div>
	<div class="col-md-12">
		<h2 style="text-align: center;">Les produits instagram</h2>
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
<div class="container">
	<div class="row">
@foreach ($produits as $detail)
<div class="card" style="width: 18rem;">
	<div class="col-lg-9 col-md-9 col-sm-3 ">
  <img src="{{asset('instagram/'.$detail->file)}}" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Description</h5>
    <p class="card-text">{{$detail->description}}</p>
  </div>
 
  <div class="card-body">
    <a href="{{$detail->lien}}" target="_blank" class="card-link">Compte client</a>
    <a href="{{url('verif-pub',$detail->id)}}" class="button ripple-effect">faire le pub</a>  
</div>
  </div>
</div>
  @endforeach
</div>
</div>
@endsection
</body>
<!-- Spacer / End-->