@extends('layouts.app')

@section('title', 'Home | provinsi')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Provinsi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	@if ($message = Session::get('success'))
    	    <div class="alert alert-success alert-block">
    	    	    <button type="button" class="close" data-dismiss="alert">×</button> 
    	        <strong>{{ $message }}</strong>
    		</div>
    	@endif
    	<div class="box box-primary">
            <div class="box-body">
              <a class="btn btn-primary" style="margin-bottom: 10px;" href="/admin/provinsi/create"><i class="fa fa-plus-circle"></i> Create</a>
				<table id="example1" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th style="width: 5%;">No</th>
							<th>Nama Provinsi</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@php
							$nomor = 1;
						@endphp
						@foreach($provinsi as $row)
						<tr>
							<td>{{ $nomor++ }}</td>
							<td>{{ $row->nama }}</td>
							<td>
								<form action="{{ url('admin/provinsi/'.$row->id.'/delete') }}" method="post">
									<a href="{{ url('admin/provinsi/'.$row->id.'/edit') }}" class="btn btn-primary btn-xs">Edit</a>
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger btn-xs">Delete</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
		    </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
@endsection