<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

	<h3>Users List - <a href="{{ route('users.create') }}">Create User</a></h3>
	<table>
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>Created At</th>
			<th>Jumlah Artikel</th>
			<th>Action</th>
		</tr>

		@foreach($users as $user)
		<tr>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->created_at }}</td>
			<td align="center">{{ $user->articles()->count() }}</td>
			<td>
				<form method="post" action="{{ route('users.destroy', $user->id) }}">
					@csrf
					@method('DELETE')
					<a href="{{ route('users.edit', $user->id) }}">Edit</a>
					<button type="submit">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>