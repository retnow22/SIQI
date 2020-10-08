<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajar = Pengajar::all();

        return view('pengajar.data-pengajar',['pengajar'=> $pengajar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengajar.tambah-pengajar');
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
            'nip' => 'required',
            'nama_pengajar' => 'required',
            'prodi' => 'required',
            'fakultas' => 'required',
            'instansi' => 'required',
            'angkatan' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'level' => 'required',
            'kode_pengajar' => 'required',    
        ]);
  
        Pengajar::create($request->all());
   
        return redirect()->route('pengajar.index')
                        ->with('success','Data Pengajar berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function show(Pengajar $pengajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengajar = Pengajar::find($id);

        return view('pengajar.edit-pengajar')
            ->with('pengajar', $pengajar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $pengajar = Pengajar::find($id);

        $request->validate([
            'nip' => 'required',
            'nama_pengajar' => 'required',
            'prodi' => 'required',
            'fakultas' => 'required',
            'instansi' => 'required',
            'angkatan' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'level' => 'required',
            'kode_pengajar' => 'required',
        ]);
  
        $pengajar->update($request->all());
  
        return redirect()->route('pengajar.index')
                        ->with('success','Data Pengajar berhasil diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengajar = Pengajar::find($id);
        
        $pengajar->delete();
        
        return redirect()->route('pengajar.index')
                        ->with('success','Data Pengajar berhasil dihapus!');

    }
}
