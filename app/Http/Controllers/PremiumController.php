<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Premium;

class PremiumController extends Controller
{
    //
    public function simpanData(Request $request)
    {
        $data = new Premium();
        $data->nama = $request->input('nama');
        $data->jenis_kelamin = $request->input('jenis_kelamin');
        $data->umur = $request->input('umur');
        $data->no_telp = $request->input('no_telp');
        $data->email = $request->input('email');
        $data->alamat = $request->input('alamat');
        $data->permasalahan = $request->input('permasalahan');

        $data->save();

        return view ('index');
    }
}
