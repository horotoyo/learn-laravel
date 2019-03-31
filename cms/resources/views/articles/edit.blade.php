<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<h3>Article Edit</h3>
<form method="post" action="{{ route('articles.update', $article->id) }}">
	@csrf
	@method('PUT')
	<label>Author :
		<select name="user_id">
			<option value="{{ $article->user_id }}">{{ $article->user->name }}</option>
			@foreach ($users as $user)
				<option value="{{ $user->id }}">{{ $user->name }}</option>
			@endforeach
		</select>
	</label>
	<br>
	<label>Category :
		<select name="category_id">
			<option value="{{ $article->category_id }}">{{ $article->category->name }}</option>
			@foreach ($categories as $category)
				<option value="{{ $category->id }}">{{ $category->name }}</option>
			@endforeach
		</select>
	</label>
	<br>
	<label>Title :
		<input type="text" name="title" value="{{ $article->title }}">
	</label>
	<br>
	<label>Content :
		<input type="text" name="password" value="{{ $article->content }}">
	</label>
	<br>
	<button type="submit">Submit</button>
</form>
</body>
</html>