<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
<form method="post" action="{{ route('articles.store') }}">
	@csrf
	<label>Author :
		<select name="user_id">
				<option>-- Pilih salah satu user --</option>
			@foreach ($articles as $article)
				<option value="{{ $article->user_id }}">{{ $article->user->name }}</option>
			@endforeach
		</select>
	</label>
	<br>
	<label>Title :
		<input type="text" name="title">
	</label>
	<br>
	<label>Content :
		<textarea name="content"></textarea>
	</label>
	<br>
	<button type="submit">Submit</button>
</form>
</body>
</html>
