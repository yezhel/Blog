@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')

	
	{!! Form::open(['route' => 'admin.users.store', 'method'=>'POST']) !!}

		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Nombre completo','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email','Correo electronico') !!}
			{!! Form::email('email',null,['class' => 'form-control','placeholder' => 'example@gmail.com','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password','Contrasena') !!}
			{!! Form::password('password',['class' => 'form-control','placeholder' => '*********','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type','Tipo') !!}
			{!! Form::select('type',['member'=>'miembro','admin'=>'administrador'],null,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@endsection