<?php

namespace App\Http\Controllers;

use App\Models\Paket;
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
}