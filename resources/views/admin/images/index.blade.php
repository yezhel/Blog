@extends('admin.template.main')

@section('title','Lista de Imagenes')

@section('content')
	<a href="{{ route('admin.images.create') }}" class="btn btn-info" >Registrar Imagen</a>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Articulo</th>
		</thead>
		<tbody>
			@foreach($images as $image)
				<tr>
					<td>{{ $image->id }}</td>
					<td>{{ $image->name }}</td>
					<td>
						@foreach($articles as $article)
							@if($article->id == $image->article_id)
								{{ $article->title }}
							@endif	
						@endforeach
					</td>
					<td>
						<a href="{{ route('admin.images.edit',$image->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

						<a href="{{ route('admin.images.destroy',$image->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $images->render() !!}
	</div>
@endsection