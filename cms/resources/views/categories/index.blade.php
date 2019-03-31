<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

	<h3>Categories List - <a href="{{ route('categories.create') }}">Create Category</a></h3>
	<table>
		<tr>
			<th>Nama Kategori</th>
			<th>Created At</th>
			<th>Action</th>
		</tr>

		@foreach($categories as $category)
		<tr>
			<td>{{ $category->name }}</td>
			<td>{{ $category->created_at }}</td>
			<td>
				<form method="post" action="{{ route('categories.destroy', $category->id) }}">
					@csrf
					@method('DELETE')
					<a href="{{ route('categories.edit', $category->id) }}">Edit</a>
					<button type="submit">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>