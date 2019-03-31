<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
<form method="post" action="{{ route('categories.store') }}">
	@csrf
	<label>Nama Kategori :
		<input type="text" name="name">
	</label>
	<br>
	<button type="submit">Submit</button>
</form>
</body>
</html>