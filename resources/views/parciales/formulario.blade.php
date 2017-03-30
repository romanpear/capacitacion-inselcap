{!! Form::text('titulo', null, ['class'=>'form-control', 'placeholder'=>'Mi titulo']) !!}
{!! Form::text('contenido', null, ['class'=>'form-control']) !!}

{!! Form::select('activo', [true => 'Activo', false => 'Inactivo'],null,['class'=>'form-control']) !!}