@extends('layouts.app')

@section('title', 'Data Pengguna')

@section('content')
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">
                    Data Pengguna
                </h5>
                <h5 class="card-header">
                    <a class="btn btn-primary pull-right" href="{{ route('pengguna.create') }}">Create</a>
                </h5>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $pengguna)
                            <tr>
                                <th scope="row">{{ $nomor++ }}</th>
                                <td>{{ $pengguna->nama }}</td>
                                <td>{{ $pengguna->email }}</td>
                                <td>
                                    <form method="post" action="{{ route('pengguna.destroy', $pengguna->id) }}">
                                        @csrf @method('DELETE')
                                        <a class="btn btn-primary btn-xs" href="{{ route('pengguna.edit', $pengguna->id) }}">Edit</a>
                                        <button class="btn btn-danger btn-xs" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->            
@endsection