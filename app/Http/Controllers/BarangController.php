<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::get();

        return view('barang.index', ['barang' => $barang]);
    }
    public function tambah()
    {
        return  view('barang.form');
    }
    public function simpan(Request $request)
    {
        $data = [
            'kode_kampus' => $request->kode_kampus,
            'nama_kampus' => $request->nama_kampus,
            'id_kampus' => $request->id_kampus,
            'progam_studi' => $request->progam_studi,
            'Kejuruan' => $request->Kejuruan,

        ];
        Barang::create($data);
        return redirect()->route('barang');
    }
    public function edit($id)
    {
        $barang = Barang::find($id)->first();
        return view('barang.form', ['barang' => $barang]);
    }
    public function update($id, Request $request)
    {
        $data = [
            'kode_kampus' => $request->kode_kampus,
            'nama_kampus' => $request->nama_kampus,
            'id_kampus' => $request->id_kampus,
            'progam_studi' => $request->progam_studi,
            'Kejuruan' => $request->Kejuruan,

        ];
        Barang::find($id)->update($data);
        return redirect()->route('barang');
    }
    public function hapus($id)
    {
        Barang::find($id)->delete();
        return redirect()->route('barang');

    }
}
