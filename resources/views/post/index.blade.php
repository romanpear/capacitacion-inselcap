@extends('layouts.principal')

@section('contenido')
<h1>Lista de posts</h1>


<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Titulo</th>
			<th>Contenido</th>
		</tr>
	</thead>
	<tbody>

	@foreach($datos as $post)
		<tr>
			<td>{{$post->id}}</td>
			<td>{{$post->titulo}}</td>
			<td>{{$post->contenido}}</td>
		</tr>
	@endforeach
		
	</tbody>
</table>

@endsection
