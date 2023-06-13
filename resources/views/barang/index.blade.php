@extends('layouts.app')
@section('contents')
@section('title', 'Data Mahasiswa')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
    </div>
    <div class="card-body">
        <a href="{{ route ('barang.tambah')}}" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Kampus</th>
                        <th>kode kampus</th>
                        <th>nama kampus</th>
                        <th>program studi</th>
                        <th>kejuruan</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($barang as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <td>{{ $row->id_kampus }}</td>
                            <td>{{ $row->kode_kampus }}</td>
                            <td>{{ $row->nama_kampus }}</td>
                            <td>{{ $row->progam_studi }}</td>
                            <td>{{ $row->Kejuruan }}</td>
                            <td>
                                <a href="{{ route('barang.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('barang.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
