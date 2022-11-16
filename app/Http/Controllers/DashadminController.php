<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class DashadminController extends Controller
{
    public function view()
    {
        $data = Paket::all();
        return view('admin.dashadmin', compact('data'));
    }

    public function paketview()
    {
        return view('admin.tambah');
    }

    public function tambah(Request $request)
    {
        $data = new Paket();
        $data->nama_paket = $request->nama;
        $data->harga = $request->harga;
        $data->keterangan = $request->keterangan;
        $data->save();
        return redirect('/dashboard-admin')->with(["success" => "Penambahan paket berhasil"]);
    }
}