@extends('admin.template.main')

@section('title','Lista de articulos')

@section('content')
	<a href="{{ route('admin.articles.create') }}" class="btn btn-info">Registrar nuevo articulo</a>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Titulo</th>
			<th>Contenido</th>
			<th>Categoria</th>
		</thead>
		<tbody>
			@foreach($articles as $article)
				<tr>
					<td>{{ $article->id }}</td>
					<td>{{ $article->title }}</td>
					<td>{{ $article->content }}</td>
					<td>
						
						@foreach($categories as $category)
							@if($article->category_id == $category->id)
								{{ $category->name }}
							@endif
						@endforeach
					</td>
					<td>
						<a href="{{ route('admin.articles.edit',$article->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

						<a href="{{ route('admin.articles.destroy',$article->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $articles->render() !!}
	</div>
@endsection