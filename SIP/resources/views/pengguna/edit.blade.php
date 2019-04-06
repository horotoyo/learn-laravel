@extends('layouts.app')

@section('title', 'Edit Data Pengguna')

@section('content')
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Form Input Data pengguna</h5>
                <div class="card-body">
                    <form action="{{ route('pengguna.update', $pengguna->id) }}" method="post" id="basicform" data-parsley-validate="">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama" class="font-weight-bold">Nama</label>
                            <input id="nama" type="text" name="nama" data-parsley-trigger="change" required="" placeholder="Masukan nama" autocomplete="off" class="form-control" value="{{ $pengguna->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="email" class="font-weight-bold">Email</label>
                            <input id="email" type="email" name="email" data-parsley-trigger="change" required="" placeholder="Masukan email" autocomplete="off" class="form-control" value="{{ $pengguna->email }}">
                        </div>
                        <div class="form-group">
                            <label for="password" class="font-weight-bold">Password</label>
                            <input id="password" type="password" name="password" data-parsley-trigger="change" required="" placeholder="Masukan password" autocomplete="off" class="form-control">
                        </div>                        
                        <div>                            
                            <p class="text-right">
                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                <a href="{{ route('pengguna.index') }}" class="btn btn-space btn-secondary">Cancel</a>
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