<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

	<h3>User List - <a href="{{ route('users.create') }}">Create User</a></h3>
	<table>
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>Created At</th>
			<th>Action</th>
		</tr>

		@foreach($users as $user)
		<tr>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->created_at }}</td>
			<td>
				<a href="{{ route('users/{user}') }}">Edit</a>
				<a href="#">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>