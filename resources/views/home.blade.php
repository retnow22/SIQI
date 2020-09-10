@extends('layouts.app')

@section('content')
<div class="container">     
        <div class="alert alert-success" role="alert">               
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
               {{ __('') }}
                Selamat Datang {{ Auth::user()->name }} ^^
                <br>
                Di Sistem Informasi Akademik Study Quran Intensive Quran Institute UNJ (SIQI)
        </div>
        <div class="widget">
		    <h2 style="text-align:center;">PENGUMUMAN</h2>
		    <ol>
                <li>PIMPINAN UNIVERSITAS NEGERI JAKARTA MEMBERIKAN SUBSIDI KUOTA BAGI MAHASISWA UNIVERSITAS NEGERI JAKARTA. PROVIDER PENYEDIA KUOTA YAITU TELKOMSEL DAN INDOSAT. BAGI MAHASISWA YANG MEMILIKI NOMOR DILUAR PROVIDER TERSEBUT MAKA DIMINTA UNTUK MEMBELI NOMOR PERDANA TELKOMSEL. UANG PEMBELIAN NOMOR PERDANA AKAN DIGANTIKAN SETELAH TERDAFTAR DI SIAKAD UNJ MELALUI TOP UP E MONEY SEBESAR RP 10.000,-</li>
                <li>BANTUAN KUOTA YANG DIBERIKAN PIHAK KAMPUS UNTUK PEMBELAJARAN SEBESAR 30 GIGA /BULAN SELAMA PANDEMI.</li>
                <li>NOMOR HP TELKOMSEL/INDOSAT YANG DIMILIKI MAHASISWA WAJIB DILAPORKAN KE UNJ MELALUI SIAKAD UNJ. SIAKAD UNJ AKAN MENDATA NOMOR HP TERSEBUT DAN AKAN MENYERAHKAN NOMOR NOMOR HP MAHASISWA TERSEBUT KE PIHAK TELKOMSEL/INDOSAT.  KUOTA AKAN DIBERIKAN LANGSUNG DARI PIHAK PROVIDER TELEKOMUNIKASI (TELKOMSEL/INDOSAT) KE NOMOR HP MAHASISWA</li>
                <li>INGAT…JANGAN SAMPAI SALAH DALAM MEMASUKKAN DATA NOMOR HP ANDA KE SIAKAD UNJ, KARENA BERAKIBAT KEGAGALAN DALAM PEMBERIAN KUOTA</li>
    		</ol>
    		<br>
    		Terima kasih
	    </div>
</div>
@endsection
