<!DOCTYPE html>
<html>
<head>
	<title>Cek</title>
</head>
<body>

<form method="get" action="{{ url('/film') }}">
	@csrf
	<label>
		Umur anda :
		<input type="text" name="umur" placeholder="masukan umur anda">
	</label>
	<button type="submit">Submit</button>
</form>

</body>
</html>