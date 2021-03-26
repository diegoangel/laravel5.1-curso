<html>
<head>
	
</head>
<body>
	<div>
		<table border="1">
			<thead>
				<tr>
					<th>#</th>
					<th>NAME</th>
					<th>LASTNAME</th>
					<th></th>
					<th></th>

				</tr>
			</thead>
			<tbody>
		@forelse ($users as $user)				
				<tr>
					<td>{{ $user->id }}</td>
					<td><a href="users/{{ $user->id }}">{{ $user->name }}</a> </td>
					<td>{{ $user->lastname }}</td>
					<td>edit</td>
					<td>remove</td>
				</tr>
		@empty
		    <p>No users</p>
		@endforelse
			</tbody>
		</table>
	</div>
</body>
</html>