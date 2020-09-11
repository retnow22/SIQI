@extends('layouts.app')

@section('content')
<div class="container">     
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span><i class="fa fa-graduation-cap"></i></span>
				<span>Hasil Studi</span>
            </li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-light mb-3">
                <div class="card-header text-primary"></div>
                <div class="card-body">
                    <p class="card-text">
                        Nomor Induk     : 0000000001
                        <br> 
                        Nama            : {{ Auth::user()->name }}
                        <br>
                        Level           : Tahsin 1
                        <br>
                        Semester Masuk  : 001
                    </p>
                    <br>
                    <h4 class="text-info"> Daftar Hasil Studi </h4>
                    <br>
                    <table class="table table-custom table-sm">
                        <thead class="thead-custom">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Kode MP</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Pengajar</th>
                            <th scope="col">Nilai Lisan</th>
                            <th scope="col">Nilai Teori</th>
                            <th scope="col">Nilai Akhir</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Cetak KHS</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>001</td>
                                    <td>0021</td>
                                    <td>Tahsin 2 Buku Jilid 2.2</td>
                                    <td>Shifa</td>
                                    <td>85</td>
                                    <td>-</td>
                                    <td>85</td>
                                    <td>Lulus</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				<i class="ace-icon fa fa-print"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
