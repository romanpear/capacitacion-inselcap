@extends('layouts.principal')

@section('contenido')
<h1>Crear Post</h1>

@include('parciales.message')

{!! Form::open(['route' => 'articulos.store']) !!}


@include('parciales.formulario')


{!! Form::submit('Registrar', ['class'=>'btn btn-primary btn-lg']) !!}
{!! Form::close()  !!}

@endsection
