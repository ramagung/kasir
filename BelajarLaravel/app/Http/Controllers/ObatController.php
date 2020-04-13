<?php

namespace App\Http\Controllers;

use App\barang;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
     $title='barang';
     $barang=barang::paginate(5);
     
     return view('admin.beranda',compact('title','barang'));
    }
 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='barang';
        return view('admin.Inputbarang',compact('title',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
        'required'=> 'Kolom :attribute Harus di isi dengan lengkap',
        'date'    => 'Kolom :attribute Harus Tanggal.',
        'numeric' => 'Kolom :attribute Harus di isi dengan Angka.',
        ];
        $validasi = $request->validate([
            'namabarang'=>'required',
            'jenisbarang'=>'required',
            'harga'=>'numeric',

        ],$messages);
        //dd($validasi);
        barang::create($validasi);
        return redirect('barang')->with('success', 'Data Berhasil di update');
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
        $title='Input barang';
        $barang=barang::find($id);
        return view('admin.InputObat',compact('title','barang'));
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
        $messages = [
            'required'=> 'Kolom :attribute Harus di isi dengan lengkap',
            'date'    => 'Kolom :attribute Harus Tanggal.',
            'numeric' => 'Kolom :attribute Harus di isi dengan Angka.',
            ];
            $validasi = $request->validate([
                'namabarang'=>'required',
                'jenisbarang'=>'required',
                'harga'=>'numeric',
 
            ],$messages);
            //dd($validasi);
            barang::whereid_barang($id)->update($validasi);
            return redirect('barang')->with('success', 'Data Berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        barang::whereid_barang($id)->delete();
        return redirect('barang')->with('success', 'Data Berhasil di Hapus');
    }
}
