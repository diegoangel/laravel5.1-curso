@extends('layouts.app')

@section('title', 'Listado de Usuarios!!!')

@section('content')


<h1>Listado de Usuarios!!!</h1>

<table class="table">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Last Name</th>
		</tr>
	</thead>
	<tbody>
	@forelse ($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->lastname }}</td>
			<td><img src="{{ $user->foto }}" class="img-thumbnail" alt="foto de usuario"></td>
			<td><a class="btn btn-primary" href="/users/listedit/{{ $user->id }}"  role="button">EDIT</a>&nbsp&nbsp<a class="btn btn-primary" href="users/delete/{{ $user->id }}" style="background-color:#FF0000"role="button">DELETE</a></td>
		@empty
    		<td>No users</td>
		@endforelse
		</tr>
	</tbody>
</table>

@endsection