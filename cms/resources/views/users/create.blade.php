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
	@if ($errors->has('name'))
		<span>{{ $errors->first('name') }}</span>
	@endif
	<br>
	
	<label>Email :
		<input type="email" name="email">
	</label>
	@if ($errors->has('email'))
		<span>{{ $errors->first('email') }}</span>
	@endif
	<br>
	
	<label>Password :
		<input type="password" name="password">
	</label>
	@if ($errors->has('password'))
		<span>{{ $errors->first('password') }}</span>
	@endif
	<br>
	
	<button type="submit">Submit</button>
</form>
</body>
</html>