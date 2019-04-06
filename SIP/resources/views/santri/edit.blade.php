@extends('layouts.app')

@section('title', 'Edit Data Santri')

@section('content')
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Form Input Data Santri</h5>
                <div class="card-body">
                    <form action="{{ route('santri.update', $santri->id) }}" method="post" id="basicform" data-parsley-validate="">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nisn" class="font-weight-bold">NISN Santri</label>
                            <input id="nisn" type="text" name="nisn" data-parsley-trigger="change" maxlength="10" required placeholder="Masukan NISN" autocomplete="off" class="form-control" value="{{ $santri->nisn }}">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="font-weight-bold">Nama Santri</label>
                            <input id="nama" type="text" name="nama" data-parsley-trigger="change" required="" placeholder="Masukan nama" autocomplete="off" class="form-control" value="{{ $santri->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir" class="font-weight-bold">Tempat Lahir</label>
                            <input id="tempat_lahir" type="text" name="tempat_lahir" data-parsley-trigger="change" required="" placeholder="Masukan tempat lahir" autocomplete="off" class="form-control" value="{{ $santri->tempat_lahir }}">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir" class="font-weight-bold">Tanggal Lahir</label>
                            <input id="tanggal_lahir" type="date" name="tanggal_lahir" data-parsley-trigger="change" required="" placeholder="Masukan tanggal lahir" autocomplete="off" class="form-control" value="{{ $santri->tanggal_lahir }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="font-weight-bold">Alamat</label>
                            <input id="alamat" type="text" name="alamat" data-parsley-trigger="change" required="" placeholder="Masukan alamat" autocomplete="off" class="form-control" value="{{ $santri->alamat }}">
                        </div>                        
                        <div>                            
                            <p class="text-right">
                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                <a href="{{ route('santri.index') }}" class="btn btn-space btn-secondary">Cancel</a>
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