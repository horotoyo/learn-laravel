@extends('layout.app')

@section('title', 'Result')

@section('content')
<div class="mb-md-4 text-center">
<a href="{{ asset('/kamar/suryo') }}" class="btn btn-primary mb-md-3">Back to Form</a>
<p>Luas Kamar Adalah : {{ $luas }} cm<sup>2</sup></p>
<h3></h3>
<div class="border border-dark">
	<div class="row py-md-5">
		<div class="col-md-4 text-left pl-md-5 pt-md-5">{{ $lebar }} cm</div>
		<div class="col-md-4 font-weight-bold py-md-5">{{ $luas }} cm<sup>2</sup></div>
		<div class="col-md-4">{{ $panjang }} cm</div>
	</div>
</div>
</div>
@endsection
