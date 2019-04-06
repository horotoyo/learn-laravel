@extends('layouts.app')

@section('title', 'Data Orang Tua')

@section('content')
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">
                    Data Orang Tua
                </h5>
                <h5 class="card-header">
                    <a class="btn btn-primary pull-right" href="{{ route('orangtua.create') }}">Create</a>
                </h5>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama Anak</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $orangtua)
                            <tr>
                                <th scope="row">{{ $nomor++ }}</th>
                                <td>{{ $orangtua->nama }}</td>
                                <td>{{ $orangtua->nik }}</td>
                                <td>{{ $orangtua->id_santri }}</td>
                                <td>{{ $orangtua->gender }}</td>
                                <td>
                                    <form method="post" action="{{ route('orangtua.destroy', $orangtua->id) }}">
                                        @csrf @method('DELETE')
                                        <a class="btn btn-primary btn-xs" href="{{ route('orangtua.edit', $orangtua->id) }}">Edit</a>
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