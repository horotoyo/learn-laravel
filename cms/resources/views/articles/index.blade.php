<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

	@include('layouts.sidebar')
	<h3>Articles List - <a href="{{ route('articles.create') }}">Create Aticle</a></h3>
	<table>
		<tr>
			<th>Author</th>
			<th>Category</th>
			<th>Title</th>
			<th>Created At</th>
			<th>Action</th>
		</tr>

		@foreach($articles as $article)
		<tr>
			<td>{{ $article->user->name }}</td>
			<td>{{ $article->category->name }}</td>
			<td>{{ $article->title }}</td>
			<td>{{ $article->created_at }}</td>
			<td>
				<form method="post" action="{{ route('articles.destroy', $article->id) }}">
					@csrf
					@method('DELETE')
					<a href="{{ route('articles.edit', $article->id) }}">Edit</a>
					<button type="submit">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>