@extends('admin.template.main')

@section('title', 'Editar usuario '.$user->name)

@section('content')
	{!! Form::open(['route' => ['admin.users.update',$user->id], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',$user->name,['class' => 'form-control','placeholder' => 'Nombre completo','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email','Correo electronico') !!}
			{!! Form::email('email',$user->email,['class' => 'form-control','placeholder' => 'example@gmail.com','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type','Tipo') !!}
			<select class="form-control" name="type">
				@if("member" == $user->type)
					<option value="member" selected>miembro</option>
					<option value="admin">administrador</option>
				@else
					<option value="admin" selected>administrador</option>
					<option value="member">miembro</option>
				@endif
			</select>
			
			
		</div>

		<div class="form-group">
			{!! Form::submit('Editar',['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
@endsection