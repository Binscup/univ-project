@extends('layouts.app')
@section('title', 'Form biodata mahasiswa')
@section('contents')
<form action="{{ isset($biodata) ?  route('biodata.tambah.update', $biodata->id) : route('biodata.tambah.simpan')}}" method="post">
    @csrf
<div class="row">
    <div class="col-12">
        <div class="card shadow  mb-4">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">{{isset($biodata)? 'Form Edit Data ': 'Form Biodata'}}</h6>
                                </div>
                                <div class="card-body">
                                     <div class="form-group">
                                        <label for="nama">nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="{{ isset($biodata) ? $biodata->nama : ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">tempat lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ isset($biodata) ? $biodata->tempat_lahir : ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir">tanggal lahir</label>
                                        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ isset($biodata) ? $biodata->tanggal_lahir : ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="asal"> asal</label>
                                        <input type="text" class="form-control" id="asal" name="asal"  value="{{ isset($biodata) ? $biodata->asal : ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="status">status</label>
                                        <input type="text" class="form-control" id="status" name="status" value="{{ isset($biodata) ? $biodata->status : ''}}">
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
