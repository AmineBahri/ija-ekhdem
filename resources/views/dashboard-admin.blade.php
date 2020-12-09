@foreach($utilisateur as $value)
{{$value->nom}}
@endforeach
<a href="{{url('logout-admin')}}">logout</a>