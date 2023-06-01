<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilePasien;

class profilePasienController extends Controller
{
    function index()
    {
        return view('admin/profilePasien/index');
    }
    function update(Request $request)
    {
        $request->validate([
            '_foto'=> 'mimes:jpeg,jpg,png',
            '_email'=>'required|email', 
        ], [
            '_foto.mimes'=> 'Format foto JPEG, JPG, dan PNG',
            '_email.email'=>'Format email yang dimasukkan tidak valid'
        ]
    );
    if($request->hasFile('_foto')){
        $foto_file = $request->file('_foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_baru = date('ymdhis').".$foto_ekstensi";
        $foto_file->move(public_path('foto')."/".$foto_baru);

        ProfilePasien::updateOrCreate(['profilePasien_key'=>'_foto'],['profilePasien_value'=>$foto_baru]);
    }
    ProfilePasien::updateOrCreate(['profilePasien_key'=>'_email'],['profilePasien_value'=>$request->_email]);

    return redirect()->route('profilePasien.index')->with('Berhasil Update Profile');
    }

}
