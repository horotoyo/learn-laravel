<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>
<h3>Daftar User</h3>
<form method="post" action="{{ route('auth.logout') }}">
	@csrf
	<button type="submit">Logout</button>
</form>
<table>
	<tr>
		<th>Nama</th>
		<th>Email</th>
		<th>Terdaftar Pada</th>

		@foreach ($users as $user)
		<tr>
			<th>{{ $user->name }}</th>
			<th>{{ $user->email }}</th>
			<th>{{ $user->created_at }}</th>
		</tr>
		@endforeach
	</tr>
</table>
</body>
</html>