<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<h3>Category Edit</h3>
<form method="post" action="{{ route('categories.update', $category->id) }}">
	@csrf
	@method('PUT')
	<label>Nama :
		<input type="text" name="name" value="{{ $category->name }}">
	</label>
	<br>
	<button type="submit">Submit</button>
</form>
</body>
</html>