<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Input Data Buku',
        );
        return view('buku', $data);
    }

    public function inputData(Request $request)
    {
        $validatedData = $request->validate(
            [
                'judul_buku'    => 'required|max:255',
                'pengarang'     => 'required|max:225',
                'jml_halaman'   => 'required',
                'tahun_terbit'  => 'required',
                'penerbit'      => 'required'
            ]
        );

        Buku::create($validatedData);

        return redirect('/')->with('success', 'Data berhasil di tambahkan !');
    }

    public function delete($id_buku)
    {
        Buku::where('id_buku', $id_buku)->delete();
        return redirect('/')->with('danger', 'Data berhasil di hapus!');
    }

    public function edit(Request $request, $id_buku)
    {
        $validatedData = $request->validate(
            [
                'judul_buku'    => 'required|max:255',
                'pengarang'     => 'required|max:225',
                'jml_halaman'   => 'required',
                'tahun_terbit'  => 'required',
                'penerbit'      => 'required'
            ]
        );

        Buku::where('id_buku', $id_buku)
            ->update($validatedData);
        return redirect('/')->with('success', 'Data berhasil di update !');
    }
}
