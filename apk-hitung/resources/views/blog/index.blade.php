@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-5">
      <div class="box box-danger">
        <div class="box-header">
          <h3 class="box-title">Aplikasi penghitung luas kamar mas {{ $nama }}</h3>
        </div>
        <div class="box-body">
            <form method="post" action="{{ url('/proses') }}">
              {{ csrf_field() }}

              <div class="form-group">
                <label for="panjang">Panjang Kamar (cm)</label>
                <input type="number" class="form-control" name="panjang" id="panjang">
              </div>

              <div class="form-group">
                <label for="lebar">Lebar Kamar (cm)</label>
                <input type="number" class="form-control" name="lebar" id="lebar">
              </div>
        </div>
        
        <div class="box-footer">
              <button class="btn btn-primary">SUBMIT</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection