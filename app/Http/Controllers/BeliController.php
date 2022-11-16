<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Pembeli;
use App\Models\User;
use Illuminate\Http\Request;

class BeliController extends Controller
{
    public function view()
    {
        $datas = Paket::all();
        return view(
            'dash.beli',
            //["title" => "Info Terkini"],
            compact('datas')
        );
    }

    public function belipaket($id)
    {
        $paketan = Paket::find($id);
        return view(
            'dash.belipaket',
            compact('paketan')
        );
    }

    public function beli(Request $request)
    {
        $beli = new Pembeli();
        $beli->id_pembeli = Auth()->user()->id;
        $beli->nama_paket = $request->paket;
        $beli->save();

        $gas = User::find(Auth()->user()->id);
        $gas->paket = $request->paket;
        $gas->update();

        return redirect('/dashboard')->with(["success" => "Pembelian paket berhasil"]);
    }
}