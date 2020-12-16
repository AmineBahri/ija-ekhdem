@extends('layouts.master')
@section('content')
<body>
	<div class="tasks-list-container compact-list margin-top-35">	
		<!-- Task -->
		@foreach ($offers as $detail)
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
					<span class="button button-sliding-icon ripple-effect">voir plus de détails<i class="icon-material-outline-arrow-right-alt"></i></span>
				</div>
			</div>
		  </a>
        @endforeach	
	</div>
@endsection
</body>