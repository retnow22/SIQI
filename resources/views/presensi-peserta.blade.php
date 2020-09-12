@extends('layouts.app')

@section('content')
<div class="container">     
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span><i class="fa fa-file-text"></i></span>
				<span>Laporan KBM</span>
            </li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-light mb-3">
                <div class="card-header text-primary"></div>
                <div class="card-body">
                    <p class="card-text">
                        <dl class="row">
                            <div class="col-md-6">
                            <div class="row">
                                <dt class="col-sm-4 text-right">Nomor Induk :</dt>
                                <dd class="col-sm-8">0000000001</dd>
                                <dt class="col-sm-4 text-right">Nama :</dt>
                                <dd class="col-sm-8">{{ Auth::user()->name }} </dd>
                                <dt class="col-sm-4 text-right">Level :</dt>
                                <dd class="col-sm-8">Tahsin 4</dd>
                                <dt class="col-sm-4 text-right">Semester Masuk :</dt>
                                <dd class="col-sm-8">001</dd>
                            </div>
                            </div>
                        </dl>
                    </p>
                    <br>
                    <h4 class="text-info"> Daftar Presensi Peserta </h4>
                    <br>
                    <table class="table table-custom table-sm">
                        <thead class="thead-custom">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Kode Rombel</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Pengajar</th>
                            <th scope="col">Materi</th>
                            <th scope="col">Keterangan</th>                          
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>001</td>
                                    <td>20/10/19</td>
                                    <td>6001</td>
                                    <td>Tahsin 4 Buku Jilid 3.2</td>
                                    <td>Shifa</td>
                                    <td>Mad Asli dan mad far'i karena hamzah</td>
                                    <td>Hadir</td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>001</td>
                                    <td>27/10/19</td>
                                    <td>6001</td>
                                    <td>Tahsin 4 Buku Jilid 3.2</td>
                                    <td>Shifa</td>
                                    <td>Mad far'i karena sukun dan mad lazim</td>
                                    <td>Tidak Hadir</td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>001</td>
                                    <td>01/11/19</td>
                                    <td>6001</td>
                                    <td>Tahsin 4 Buku Jilid 3.2</td>
                                    <td>Shifa</td>
                                    <td>Tafkhim (isti'la; gunnah)</td>
                                    <td>Hadir</td>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
