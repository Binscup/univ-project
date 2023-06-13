@extends('layouts.app')
@section('title', 'Form Data')
@section('contents')
<form action="{{ isset($barang) ?  route('barang.tambah.update', $barang->id) : route('barang.tambah.simpan')}}" method="post">
    @csrf
<div class="row">
    <div class="col-12">
        <div class="card shadow  mb-4">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">{{isset($barang)? 'Form Edit Data ': 'Form Tambah Data'}}</h6>
                                </div>
                                <div class="card-body">
                                     <div class="form-group">
                                        <label for="kode_kampus">ID Kampus</label>
                                        <input type="text" class="form-control" id="id_kampus" name="id_kampus" value="{{ isset($barang) ? $barang->id_kampus : ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="kode_kampus">Kode Kampus</label>
                                        <input type="text" class="form-control" id="kode_kampus" name="kode_kampus" value="{{ isset($barang) ? $barang->kode_kampus : ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_kampus">nama Kampus</label>
                                        <input type="text" class="form-control" id="nama_kampus" name="nama_kampus" value="{{ isset($barang) ? $barang->nama_kampus : ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="program_studi">program studi</label>
                                        <input type="text" class="form-control" id="program_studi" name="program_studi"  value="{{ isset($barang) ? $barang->program_studi : ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="Kejuruan">Kejuruan</label>
                                        <input type="text" class="form-control" id="Kejuruan" name="Kejuruan" value="{{ isset($barang) ? $barang->Kejuruan : ''}}">
                                    </div>

                         </div>
                         <div class="card-footer">
                         <button type="submit" class="btn btn-primary">Simpan</button>
                         </div>
                     </div>
                </div>
            </div>
        </div>
     </div>
 </div>
</form>

@endsection
