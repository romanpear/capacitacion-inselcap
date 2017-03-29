@extends('layouts.principal')

@section('contenido')

@include('parciales.errores')

@if($edad > 19)
<h3>Soy mayor</h3>
@elseif($edad == 18)
<h2>tengo 18</h2>
@else
<h3>Soy menor</h3>
@endif

<h3>Estoy en medio</h3>

@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor

<ul>
	
@foreach($datos as $d)

<li>{{$d}}</li>

@endforeach

</ul>

@endsection



