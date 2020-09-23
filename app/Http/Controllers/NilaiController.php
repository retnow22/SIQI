<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilai = Nilai::all();
        
        return view('nilai.nilai-uas',['nilai'=> $nilai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nilai.tambah-nilai');
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
            'kode_matpel' => 'required',
            'nilai_lisan' => 'required',
            // 'nilai_teori' => 'required',
            'nilai_akhir' => 'required',
            'kkm' => 'required',
            'keterangan' => 'required',
            'penguji' => 'required',   
        ]);
  
        Nilai::create($request->all());
   
        return redirect()->route('nilai.index')
                        ->with('success','Data Nilai berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(Nilai $nilai)
    {
        return view('nilai.edit-nilai',compact('nilai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai $nilai)
    {
        $request->validate([
            'nis' => 'required',
            'kode_matpel' => 'required',
            'nilai_lisan' => 'required',
            'nilai_teori' => 'required',
            'nilai_akhir' => 'required',
            'kkm' => 'required',
            'keterangan' => 'required',
            'penguji' => 'required',
        ]);
  
        $nilai->update($request->all());
  
        return redirect()->route('nilai.index')
                        ->with('success','Data Nilai berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai $nilai)
    {
        $nilai->delete();
        
        return redirect()->route('nilai.index')
                        ->with('success','Data Nilai berhasil dihapus!');

    }
}
