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
			<a href="{{ route('profil.create') }}" class="btn btn-primary btn-xs">Create</a>
		</div>
	</div>
	@php
		$nomor = 1;
	@endphp

	<div class="box">
		<div class="box-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Lengkap</th>
						<th>Alamat</th>
						<th>Avatar</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($avas as $ava)
					<tr>
						<td>{{ $nomor++ }}</td>
						<td>{{ $ava->nama }}</td>
						<td>{{ $ava->alamat }}</td>
						<td>
							<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#{{ $ava->depan }}">Detail</button>
							<!-- The Modal -->
							  <div class="modal fade" id="{{ $ava->depan }}">
							    <div class="modal-dialog">
							      <div class="modal-content">
							      
							        <!-- Modal Header -->
							        <div class="modal-header">
							          <h4 class="modal-title">Detail Profil</h4>
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							        </div>
							        
							        <!-- Modal body -->
							        <div class="modal-body">
							        	<div class="text-center">
											<img src="{{ Avatar::create($ava->nama)->toBase64() }}" class="img-fluid"/>
							        	</div>
							        </div>

							        <div class="modal-footer">
							        	
							        </div>
							        
							      </div>
							    </div>
							  </div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>



</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>