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
}