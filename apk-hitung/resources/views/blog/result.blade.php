@extends('layout.app')

@section('title', 'Result')

@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="box box-danger">
		<div class="box-header">
			<a href="{{ asset('/blog/suryo') }}" class="btn btn-primary">Back to Form</a>
		</div>
        <div class="box-body">
			<p>Lebar Ruangan : <b>{{ $lebar }} cm</b></p>
			<p>Panjang Ruangan : <b>{{ $panjang }} cm</b></p>
			<p>Luas Ruangan : {{ $lebar }} cm x {{ $panjang }} cm = <b> {{ $luas }} cm<sup>2</sup></b></p>
        </div>
      </div>
    </div>
  </div>
			<div class="kotak" style="width: {{ $panjang }}0px; height: {{ $lebar }}0px;">
				<div class="row">
					<div class="col-md-4">{{ $lebar }} cm</div>
					<div class="col-md-4">{{ $luas }} cm<sup>2</sup></div>
					<div class="col-md-4">{{ $panjang }} cm</div>
				</div>
          	</div>
</section>
@endsection
