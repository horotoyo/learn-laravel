@extends('layouts.app')

@section('title', 'Edit Data Orangtua')

@section('content')
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Form Input Data orangtua</h5>
                <div class="card-body">
                    <form action="{{ route('orangtua.update', $orangtua->id) }}" method="post" id="basicform" data-parsley-validate="">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="id_santri" class="font-weight-bold">Nama santri</label>
                            <select name="id_santri" class="form-control">
                                <option value="{{ $orangtua->id_santri }}">{{ $orangtua->id_santri }}</option>
                                @foreach ($santri as $row)
                                <option value="{{ $row->id }}">{{ $row->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input id="nik" type="text" name="nik" data-parsley-trigger="change" required maxlength="16" placeholder="Masukan NIK" autocomplete="off" class="form-control" value="{{ $orangtua->nik }}">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="font-weight-bold">Nama orang tua santri</label>
                            <input id="nama" type="text" name="nama" data-parsley-trigger="change" required="" placeholder="Masukan nama" autocomplete="off" class="form-control" value="{{ $orangtua->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="gender" class="font-weight-bold">Gender</label><br>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="gender" class="custom-control-input" value="L">
                                <span class="custom-control-label">Laki Laki</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="gender" class="custom-control-input" value="P">
                                <span class="custom-control-label">Perempuan</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan" class="font-weight-bold">Pendidikan</label>
                            <input id="pendidikan" type="text" name="pendidikan" data-parsley-trigger="change" required="" placeholder="Masukan pendidikan" autocomplete="off" class="form-control" value="{{ $orangtua->pendidikan }}">
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan" class="font-weight-bold">Pekerjaan</label>
                            <input id="pekerjaan" type="text" name="pekerjaan" data-parsley-trigger="change" required="" placeholder="Masukan pekerjaan" autocomplete="off" class="form-control" value="{{ $orangtua->pekerjaan }}">
                        </div>                        
                        <div>                            
                            <p class="text-right">
                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                <a href="{{ route('orangtua.index') }}" class="btn btn-space btn-secondary">Cancel</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->
@endsection

@section('script')
<script src="/concept/assets/vendor/parsley/parsley.js"></script>
<script>
$('#form').parsley();
</script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
</script>
@endsection