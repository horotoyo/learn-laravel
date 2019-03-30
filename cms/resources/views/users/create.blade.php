<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
<form method="post" action="{{ route('users.store') }}">
	@csrf
	<label>Nama :
		<input type="text" name="name">
	</label>
	<br>
	<label>Email :
		<input type="email" name="email">
	</label>
	<br>
	<label>Password :
		<input type="password" name="password">
	</label>
	<br>
	<button type="submit">Submit</button>
</form>
</body>
</html>