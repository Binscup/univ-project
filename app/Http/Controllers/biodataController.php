<?php

namespace App\Http\Controllers;


use App\Models\biodata;
use Illuminate\Http\Request;

class biodataController extends Controller
{
    public function index()
    {
        $biodata = biodata::get();

        return view('biodata.index', ['biodata' => $biodata]);
    }
    public function tambah()
    {
        return  view('biodata.form');
    }
    public function simpan(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahirus,
            'asal' => $request->asal,
            'Kejuruan' => $request->Kejuruan,

        ];
        biodata::create($data);
        return redirect()->route('barang');
    }
    public function edit($id)
    {
        $barang = biodata::find($id)->first();
        return view('biodata.form', ['barang' => $barang]);
    }
    public function update($id, Request $request)
    {
        $data = [
            'kode_kampus' => $request->kode_kampus,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'asal' => $request->asal,
            'status' => $request->status,

        ];
        biodata::find($id)->update($data);
        return redirect()->route('biodata');
    }
    public function hapus($id)
    {
        biodata::find($id)->delete();
        return redirect()->route('biodata');
    }
}
