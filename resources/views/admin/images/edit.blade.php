@extends('admin.template.main')

@section('title','Editar Imagen ' .$image->name )

@section('content')
	{!! Form::open(['route' => ['admin.images.update',$image->id],'method' => 'PUT']) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',$image->name,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('article_id','Articulo') !!}
			<select class="form-control">
				@foreach($articles as $article)
					@if($article->id == $image->article_id)
						<option value="{{ $article->id }}" selected>{!! $article->title !!}</option>
					@else
						<option value="{{ $article->id }}">{!! $article->title !!}</option>
					@endif
				@endforeach
			</select>
		</div>

		<div class="form-group">
			{!! Form::submit('Editar',['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection