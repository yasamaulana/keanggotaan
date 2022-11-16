<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function view()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama'     => 'required',
            'email'   => ['required', 'email', 'unique:users'],
            'password'   => 'required'
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return back($validator->errors());
        }

        $item = new User;
        $item->nama = $request->nama;
        $item->email = $request->email;
        $item->role = "guest";
        $item->password = Hash::make($request->password);
        $item->save();
        return redirect('/login')->with(['success' => 'berhasil mendaftar']);;
    }
}