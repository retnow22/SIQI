<?php

namespace App\Http\Controllers;

use App\Models\Matpel;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Matpel::all();

        return view('jadwal.jadwal',['jadwal'=> $jadwal]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwal.tambah');
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
            'nama_matpel'=> 'required',
            'semester'=> 'required',
            'hari'=> 'required',
            'waktu'=> 'required',
            'level'=> 'required',
            'kuota' => 'required',
            'kode_pengajar' => 'required',
            'pengajar_id' => 'required'
        ]);
  
        Matpel::create($request->all());
   
        return redirect()->route('jadwal.index')
                        ->with('success','Jadwal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Matpel  $matpel
     * @return \Illuminate\Http\Response
     */
    public function show(Matpel $matpel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Matpel  $matpel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matpel = Matpel::find($id);

         return view('jadwal.edit-jadwal')
             ->with('matpel', $matpel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Matpel  $matpel
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $matpel = Matpel::find($id);
        
        $request->validate([
            'nama_matpel'=> 'required',
            'semester'=> 'required',
            'hari'=> 'required',
            'waktu'=> 'required',
            'level'=> 'required',
            'kuota' => 'required',
            'kode_pengajar' => 'required',
        ]);
  
        $matpel->update($request->all());
  
        return redirect()->route('jadwal.index')
                        ->with('success','Jadwal berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Matpel  $matpel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matpel = Matpel::find($id);
        
        $matpel->delete();
        
        return redirect()->route('jadwal.index')
                        ->with('success','Jadwal berhasil dihapus!');
    }
}
