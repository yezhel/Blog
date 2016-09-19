@extends('admin.template.main')

@section('title','Crear Imagen')

@section('content')
	{!! Form::open(['route' => 'admin.images.store', 'method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Nombre de la imagen']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('article_id', 'Articulo') !!}
			{!! Form::select('article_id',$articles,null,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection