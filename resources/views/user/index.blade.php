<h1>Listado de Usuarios!!!</h1>

<!-- ACA IBA LA TABLA CON EL LISTADO DE USUARIOS PERO LA ELIMINE SIN QUERER -->

<table >
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