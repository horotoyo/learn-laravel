<!DOCTYPE html>
<html>
<head>
	<title>Data Model</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="jumbotron text-center">
		<h1>MODEL</h1>
	</div>

	<div class="box mb-md-4">
		<div class="box-body">
			<form method="post" action="{{ route('profil.store') }}" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-auto">
						<input type="text" name="depan" placeholder="nama depan" class="form-control" required>
					</div>
					<div class="col-auto">
						<input type="text" name="belakang" placeholder="nama belakang" class="form-control" required>
					</div>
					<div class="col-auto">
						<input type="text" name="alamat" placeholder="nama alamat" class="form-control" required>
					</div>
					<div class="col-auto">
						<input type="file" name="file" class="form-control-file">
					</div>					
				</div>
				<div class="row mt-md-3">
					<div class="col-md-3">
						<button class="btn btn-primary btn-xs">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>