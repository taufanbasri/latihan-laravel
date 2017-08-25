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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
}
