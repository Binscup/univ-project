@extends('layouts.app')
@section('contents')
@section('title', 'biodata Mahasiswa')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Biodata Mahasiswa</h6>
    </div>
    <div class="card-body">
        <a href="{{ route ('biodata.tambah')}}" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>nama</th>
                        <th>tempat lahir</th>
                        <th>tanggal lahir</th>
                        <th>status</th>
                        <th>asal</th>
                        <th>status</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($biodata as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->tempat_lahir }}</td>
                            <td>{{ $row->tanggal_lahir }}</td>
                            <td>{{ $row->asal }}</td>
                            <td>{{ $row->status }}</td>
                            <td>
                               <a href="{{ route('biodata.edit', $row->id) }}" class="btn btn-warning btn-circle">
                                        <i class="fa fa-folder"></i>
                                    </a>

                                <a href="{{ route('biodata.hapus', $row->id) }}" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
