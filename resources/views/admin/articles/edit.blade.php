@extends('admin.template.main')

@section('title','Editar articulo '. $article->title)

@section('content')
	{!! Form::open(['route' => ['admin.articles.update',$article->id], 'method' => 'PUT']) !!}
		<div class="form-group">
			{!! Form::label('title','Titulo') !!}
			{!! Form::text('title',$article->title,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('content','Contenido') !!}
			{!! Form::text('content',$article->content,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('category_id','Categoria') !!}
			<select class="form-control" name="category_id">
				@foreach($categories as $category)
					@if($article->category_id == $category->id)
						<option value="{{ $category->id }}" selected>{!! $category->name !!}</option>
					@else
						<option value="{{ $category->id }}">{!! $category->name !!}</option>
					@endif
				@endforeach
			</select>
		</div>

		<div class="form-group">
			{!! Form::label('user_id','Usuario') !!}
			<select class="form-control" name="user_id">
				@foreach($users as $user)
					@if($article->category_id == $user->id)
						<option value="{{ $user->id }}" selected>{!! $user->name !!}</option>
					@else
						<option value="{{ $user->id }}">{!! $user->name !!}</option>
					@endif
				@endforeach
			</select>
		</div>

		<div class="form-group">
			{!! Form::submit('Editar',['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection