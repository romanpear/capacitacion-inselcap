@extends('layouts.principal')

@section('contenido')
<h1>Crear Post</h1>

{!! Form::open(['route' => 'articulos.store']) !!}

{!! Form::text('titulo', null, ['class'=>'form-control', 'placeholder'=>'Mi titulo']) !!}
{!! Form::text('contenido', 'Contenido', ['class'=>'form-control']) !!}

{!! Form::select('activo', [true => 'Activo', false => 'Inactivo'],null,['class'=>'form-control']) !!}


{!! Form::submit('Registrar', ['class'=>'btn btn-primary btn-lg']) !!}
{!! Form::close()  !!}

@endsection
