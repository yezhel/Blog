@extends('admin.template.main')

@section('title','Lista de tags')

@section('content')
	<a href="{{ route('admin.tags.create') }}" class="btn btn-info">Registrar tag</a>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
		</thead>
		<tbody>
			@foreach($tags as $tag)
				<tr>
					<td>{{ $tag->id }}</td>
					<td>{{ $tag->name }}</td>
					<td>
						<a href="{{ route('admin.tags.edit',$tag->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

						<a href="{{ route('admin.tags.destroy',$tag->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection