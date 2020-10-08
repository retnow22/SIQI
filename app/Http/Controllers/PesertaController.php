<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peserta = Peserta::all();

        return view('peserta.data-peserta',['peserta'=> $peserta]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peserta.tambah-peserta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([   
            'nis' => 'required',
            'nama_peserta' => 'required',
            'prodi' => 'required',
            'fakultas' => 'required',
            'instansi' => 'required',
            'angkatan' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'level' => 'required',
            'semester_masuk' => 'required',    
        ]);
  
        Peserta::create($request->all());
   
        return redirect()->route('peserta.index')
                        ->with('success','Data Peserta berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peserta = Peserta::find($id);

        return view('peserta.edit-peserta')
            ->with('peserta', $peserta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $peserta = Peserta::find($id);

        $request->validate([
            'nis' => 'required',
            'nama_peserta' => 'required',
            'prodi' => 'required',
            'fakultas' => 'required',
            'instansi' => 'required',
            'angkatan' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'level' => 'required',
            'semester_masuk' => 'required',
        ]);
  
        $peserta->update($request->all());
  
        return redirect()->route('peserta.index')
                        ->with('success','Data Peserta berhasil diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peserta = Peserta::find($id);

        $peserta->delete();
        
        return redirect()->route('peserta.index')
                        ->with('success','Data Peserta berhasil dihapus!');
                        
    }
}
