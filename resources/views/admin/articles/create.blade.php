@extends('admin.template.main')

@section('title','Crear un articulo')

@section('content')
	{!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST']) !!}
		<div class="Form-group">
			{!! Form::label('title','Titulo') !!}
			{!! Form::text('title',null,['class' => 'form-control','placeholder' => 'titulo del articulo', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('content', 'Contenido') !!}
			{!! Form::text('content',null,['class' => 'form-control','placeholder' => 'Contenido del articulo','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('category_id','Categoria') !!}
			{!! Form::select('category_id', $categories, null,['class' => 'form-control', 'placeholder' => 'Categoria del articulo']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('user_id','Usuario') !!}
			{!! Form::select('user_id', $users, null,['class' => 'form-control', 'placeholder' => 'Nombre del escritor']) !!}
		</div>


		<div class="form-group">
			{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
		</div>
		
	{!! Form::close() !!}
@endsection