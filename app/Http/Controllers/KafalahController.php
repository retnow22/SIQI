<?php

namespace App\Http\Controllers;

use App\Models\Kafalah;
use Illuminate\Http\Request;

class KafalahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kafalah = Kafalah::all();

        return view('kafalah.hadiah-pengajar',['kafalah'=> $kafalah]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kafalah.tambah-kafalah');
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
            'semester' => 'required',
            'nip' => 'required',
            'jumlah_mengajar' => 'required',
            'nominal' => 'required',
            'total_pembayaran' => 'required',
        ]);
  
        Kafalah::create($request->all());
   
        return redirect()->route('kafalah.index')
                        ->with('success','Data Kafalah berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kafalah  $kafalah
     * @return \Illuminate\Http\Response
     */
    public function show(Kafalah $kafalah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kafalah  $kafalah
     * @return \Illuminate\Http\Response
     */
    public function edit(Kafalah $kafalah)
    {
        return view('kafalah.edit-kafalah',compact('kafalah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kafalah  $kafalah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kafalah $kafalah)
    {
        $request->validate([
            'semester' => 'required',
            'nip' => 'required',
            'jumlah_mengajar' => 'required',
            'nominal' => 'required',
            'total_pembayaran' => 'required',
        ]);
  
        $kafalah->update($request->all());
  
        return redirect()->route('kafalah.index')
                        ->with('success','Data Kafalah berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kafalah  $kafalah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kafalah $kafalah)
    {
        $kafalah->delete();
        
        return redirect()->route('kafalah.index')
                        ->with('success','Data Kafalah berhasil dihapus!');

    }
}
