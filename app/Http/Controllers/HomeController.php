<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {
//        $nama = $request->get('nama');
//        $email = $request->get('email');
//        return 'Halo ' . $nama . '. Email Anda : ' . $email;

        dd($request->all());
    }

    public function registrasi(Request $request)
    {
        if ($request->get('nomor_ktp') != 123) {
            $request->flashOnly('nama', 'alamat');
            return redirect()->back();
        }
        return "Berhasil Registrasi!";
    }

    public function uploadProfilePicture(Request $request)
    {
        if (!$request->hasFile('photo')) {
            return "Tidak ada photo yang diupload";
        }
        $photo = $request->file('photo');
        $filename = str_random(6) . "." . $photo->getClientOriginalExtension();
        $path = public_path() . '/img';
        $photo->move($path, $filename);
        return "Berhasil upload " . $photo->getClientOriginalName() . " ke " .
            $path . " dengan nama file " . $filename;
    }

    public function generateCookie(Request $request)
    {
        return response('halo')->withCookie(cookie('api_key', 's3cr3t', 10));
    }

    public function testCookie(Request $request)
    {
        if ($request->cookie('api_key')) {
            return "Cookie api_key valid";
        } else {
            return "Cookie api_key tidak valid";
        }
    }
}
