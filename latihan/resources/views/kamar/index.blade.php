@extends('layout.app')

@section('title', 'Kamar')

@section('content')
<div class="mb-md-4 text-center">
	<h3>Aplikasi penghitung luas kamar mas {{ $nama }}</h3>
	<form method="post" action="{{ url('/proses') }}" class="pt-md-3">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="panjang">Panjang Kamar (cm)</label>
			<input type="number" class="form-control" name="panjang" id="panjang">
		</div>

		<div class="form-group">
			<label for="lebar">Lebar Kamar (cm)</label>
			<input type="number" class="form-control" name="lebar" id="lebar">
		</div>
		
		<button class="btn btn-primary">SUBMIT</button>
	</form>
</div>
@endsection