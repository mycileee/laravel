<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mskfo;

class MskfoController extends Controller
{
    public function mskfo()
    {
        $data = Mskfo::get();

        return view('mskfo',compact('data'));
    }

    public function post(Request $request)
    {
        $validateData = $request->validate([
            'waktu'=> 'required',
            'jenis'=> 'required',
            'petugas' => 'required',
        ]);

        $data['tanggal'] =      $request->waktu;
        $data['Jeniskabel'] =   $request->jenis;
        $data['jumlahkabel'] =  $request->jumlah;
        $data['panjangkabel'] = $request->panjang;
        $data['petugas'] =      $request->petugas;
        $data['keterangan'] =   $request->keterangan;

        Mskfo::create($data);

        return redirect()->route('mskfo');
    }

    public function edit1(Request $request,$id){
        $data = Mskfo::find($id);
        
        return view('edit.edit1',compact('data'));
    }

}