@extends('layouts.app')

@section('title', 'Home | Santri')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Santri
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	<div class="box box-primary">
        	<div class="box-header with-border">
              <h3 class="box-title">Daftar Nama</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a class="btn btn-primary" style="margin-bottom: 10px;" href="/admin/santri/create"><i class="fa fa-plus-circle"></i> Create</a>
				<table class="table table-bordered table-hover">
					<tr>
						<th style="width: 5%;">No</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Created At</th>
						<th>Action</th>
					</tr>
					@php
						$nomor = 1;
					@endphp
					@foreach($santri as $row)
					<tr>
						<td>{{ $nomor++ }}</td>
						<td>{{ $row->nama }}</td>
						<td>{{ $row->email }}</td>
						<td>{{ ($row->gender)?'Perempuan':'Laki-Laki' }}</td>
						<td>{{ $row->created_at->format('d M Y') }}</td>
						<td>
							<form action="{{ url('admin/santri/'.$row->id.'/delete') }}" method="post">
								<a href="{{ url('admin/santri/'.$row->id.'/edit') }}" class="btn btn-primary btn-xs">Edit</a>
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger btn-xs">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</table>
					<div class="row">
						<div class="col-xs-6">
							<div style="margin-top: 25px;">
								@if(!empty(Session::get('success')))
								<div class="callout callout-success">
									<h5>
										{{Session::get('success')}}
									</h5>
								</div>
								@else
								<div>
								</div>
								@endif
							</div>
						</div>
						<div class="col-xs-6">
							<div class="pull-right">
								{{ $santri->links() }}
							</div>
						</div>
					</div>

		    </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
@endsection