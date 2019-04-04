@extends('layouts.app')

@section('title', 'Home | User')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data user
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
              <a class="btn btn-primary" style="margin-bottom: 10px;" href="{{ route('users.create') }}"><i class="fa fa-plus-circle"></i> Create</a>
				<table class="table table-bordered table-hover">
					<tr>
						<th style="width: 5%;">No</th>
						<th>Email</th>
						<th>Created At</th>
						<th>Action</th>
					</tr>
					@php
						$nomor = 1;
					@endphp
					@foreach($users as $user)
					<tr>
						<td>{{ $nomor++ }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->created_at->format('d M Y') }}</td>
						<td>
							<form action="" method="post">
								<a href="{{ route('users') }}" class="btn btn-primary btn-xs">Edit</a>
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger btn-xs">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</table>
		    </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
@endsection