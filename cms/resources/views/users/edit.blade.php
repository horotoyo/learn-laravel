<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
<form method="post" action="{{ route('users.update') }}">
	@csrf
	@method('PUT')
	<label>Nama :
		<input type="hidden" name="id" value="{{ $id }}">
		<input type="text" name="name" value="{{ $name }}">
	</label>
	<br>
	<label>Email :
		<input type="email" name="email" value="{{ $email }}">
	</label>
	<br>
	<button type="submit">Submit</button>
</form>
</body>
</html>