@extends('layouts.app')

@section('title', 'Listado de Usuarios!!!')

@section('content')


<h1>Listado de Usuarios!!!</h1>

<table>
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
		@empty
    		<td>No users</td>
		@endforelse
		</tr>
	</tbody>
</table>

@endsection