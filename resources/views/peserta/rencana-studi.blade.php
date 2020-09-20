@extends('layouts.app')

@section('content')
<div class="container">     
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span><i class="fa fa-book"></i></span>
				<span>Rencana Studi</span>
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
                    <h4 class="text-info"> Pilih Jadwal </h4>
                    <br>
                    <table class="table table-custom table-sm">
                        <thead class="thead-custom">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode MP</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Hari</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Level</th>
                            <th scope="col">Pengajar</th>
                            <th scope="col">Kuota</th>
                            <th scope="col">Pilih Jadwal</th>                          
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>0041</td>
                                    <td>Tahsin 4</td>
                                    <td>001</td>
                                    <td>Senin</td>
                                    <td>08.00-10.00</td>
                                    <td>6</td>
                                    <td>Shifa</td>
                                    <td>6</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				Pilih
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>0042</td>
                                    <td>Tahsin 4</td>
                                    <td>001</td>
                                    <td>Senin</td>
                                    <td>10.00-12.00</td>
                                    <td>6</td>
                                    <td>Shifa</td>
                                    <td>3</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				Pilih
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>0043</td>
                                    <td>Tahsin 4</td>
                                    <td>001</td>
                                    <td>Selasa</td>
                                    <td>08.00-10.00</td>
                                    <td>6</td>
                                    <td>Aulia</td>
                                    <td>10</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				Pilih
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">4</td>
                                    <td>0044</td>
                                    <td>Tahsin 4</td>
                                    <td>001</td>
                                    <td>Selasa</td>
                                    <td>13.00-15.00</td>
                                    <td>6</td>
                                    <td>Aulia</td>
                                    <td>5</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				Pilih
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
