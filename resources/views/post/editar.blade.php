@extends('layouts.principal')

@section('contenido')
<h1>Editar post</h1>
@include('parciales.message')
{!! Form::model($post, ['route' => ['articulos.update', $post->id],'method'=>'PUT']) !!}
	@include('parciales.formulario')
	{!! Form::submit('Actualizar', ['class'=>'btn btn-warning'])!!}
{!! Form::close()!!}

@endsection