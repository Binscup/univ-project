@extends('layouts.app')
@section('contents')
@section('title', 'Data Kehadiran Mahasiswa')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Absen Mahasiswa</h6>
    </div>
    <div class="card-body">
        <a href="{{ route ('mahasiswa.tambah')}}" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                        @foreach ($mahasiswa as $row)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <td>{{ $row->nama }}</td>
                                    <td>
                                    <a href="{{ route('mahasiswa.edit', $row->id) }}" class="btn btn-warning btn-circle">
                                                <i class="fa fa-folder"></i>
                                            </a>

                                        <a href="{{ route('mahasiswa.hapus', $row->id) }}" class="btn btn-danger btn-circle">
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
