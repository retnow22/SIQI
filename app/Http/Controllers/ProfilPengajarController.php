<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use Illuminate\Http\Request;

class ProfilPengajarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profil()
    {
        $profil = Pengajar::all();

        return view('pengajar.profil', ['profil'=>$profil]);
    }

    public function update($id, Request $request)
    {
        $pengajar = Pengajar::find($id);

        $request->validate([
            'nama_pengajar' => 'required',
            'prodi' => 'required',
            'fakultas' => 'required',
            'instansi' => 'required',
            'no_hp' => 'required',
        ]);
  
        $pengajar->update($request->all());
  
        return redirect()->route('pengajar.profil')
                        ->with('success','Biodata berhasil diperbarui!');

    }
}
