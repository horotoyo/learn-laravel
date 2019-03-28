@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home Page for examples
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
              <h3 class="box-title">Data Latihan</h3>
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
						<td>{{ ($row->gender)?'Laki-Laki':'Perempuan' }}</td>
						<td>{{ $row->created_at }}</td>
						<td>
							<a href="" class="btn btn-primary btn-xs">Edit</a>
							<a href="" class="btn btn-danger btn-xs">Delete</a>
						</td>
					</tr>
					@endforeach
				</table>

					<div class="pull-right">
						{{ $santri->links() }}
					</div>

		    </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
@endsection