@extends('layouts.principal')

@section('contenido')
<h1>Lista de posts</h1>

<a href="{{route('articulos.create')}}" title="Crear post">Crear post</a>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Titulo</th>
			<th>Contenido</th>
			<th></th>
		</tr>
	</thead>
	<tbody>

		@foreach($datos as $post)
		<tr>
			<td>{{$post->id}}</td>
			<td>{{$post->titulo}}</td>
			<td>{{$post->contenido}}</td>
			<td>
				<a href="{{route('articulos.edit',$post->id )}}" >
					Editar
				</a>
			</td>
			<td>
				{!! Form::model($post, ['route' => ['articulos.destroy', $post->id],'method'=>'DELETE']) !!}

					<button type='submit' class="btn btn-danger"  onclick='return confirm("Estas seguro que desseas eliminar el Gasto?")'>Eliminar</button>

				{!! Form::close() !!}
			</td>
		</tr>
		@endforeach
		
	</tbody>
</table>

{{ $datos->links() }}

@endsection
