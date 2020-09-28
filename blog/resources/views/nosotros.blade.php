@extends('plantilla')

@section('seccion')
	<h1>Este es mi equipo</h1>
	@foreach($equipo as $nombre)
		<a href="#" class="h4 text-danger">{{$nombre}}</a><br>
	@endforeach
@endsection
