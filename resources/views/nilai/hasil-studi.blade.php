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
                                    <td scope="row">1</td>
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
                                <tr>
                                    <td scope="row">2</td>
                                    <td>002</td>
                                    <td>0034</td>
                                    <td>Tahsin 3 Buku Jilid 3.1</td>
                                    <td>Aulia</td>
                                    <td>85</td>
                                    <td>90</td>
                                    <td>87,5</td>
                                    <td>Lulus</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				<i class="ace-icon fa fa-print"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>003</td>
                                    <td>0034</td>
                                    <td>Tahsin 4 Buku Jilid 3.2</td>
                                    <td>Shifa</td>
                                    <td>85</td>
                                    <td>85</td>
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
