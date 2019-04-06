@extends('layouts.app')

@section('title', 'Data Santri')

@section('content')
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">
                    Data Santri
                </h5>
                <h5 class="card-header">
                    <a class="btn btn-primary pull-right" href="{{ route('santri.create') }}">Create</a>
                </h5>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NISN</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tempat Tanggal Lahir</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $santri)
                            <tr>
                                <th scope="row">{{ $nomor++ }}</th>
                                <td>{{ $santri->nisn }}</td>
                                <td>{{ $santri->nama }}</td>
                                <td>{{ $santri->tempat_lahir }}, {{ $santri->tanggal_lahir }}</td>
                                <td>{{ $santri->alamat }}</td>
                                <td>
                                    <form method="post" action="{{ route('santri.destroy', $santri->id) }}">
                                        @csrf @method('DELETE')
                                        <a class="btn btn-primary btn-xs" href="{{ route('santri.edit', $santri->id) }}">Edit</a>
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