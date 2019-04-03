@extends('layouts.app')

@section('title', 'Provinsi | Create')

@section('content')
	<section class="content">
        <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Create Data Example</h3>
            </div>
            <!-- /.box-header -->


            <!-- form start -->
            <form class="form-horizontal" action="{{ url('admin/provinsi') }}" method="post">
              @csrf
              <div class="box-body">

            {{-- menampilkan error validasi --}}
            @if (count($errors) > 0)
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama Provinsi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ old('nama') }}">
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{ url('admin/provnsi') }}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Create</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          </section>
@endsection