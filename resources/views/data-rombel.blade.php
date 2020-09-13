@extends('layouts.app')

@section('content')
<div class="container">     
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span><i class="fa fa-group"></i></span>
				<span>Data Rombel</span>
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
                                <dd class="col-sm-8">4000000001</dd>
                                <dt class="col-sm-4 text-right">Nama :</dt>
                                <dd class="col-sm-8">{{ Auth::user()->name }} </dd>
                                <dt class="col-sm-4 text-right">Level :</dt>
                                <dd class="col-sm-8">Tahsin 4</dd>
                                <dt class="col-sm-4 text-right">Kode Pengajar :</dt>
                                <dd class="col-sm-8">RWD</dd>
                            </div>
                            </div>
                        </dl>
                    </p>
                    <br>
                        <div class ="row">
                        <div class="col-12">
                        <form>
                        <div class="form-group row">
                            <label for="inputInstansi" class="col-sm-2 col-form-label text-right">Pilih Rombel :</label>
                            <div class="col-sm-4">
                            <select class="form-control form-control-sm">
                                <option selected>Select</option>
                                <option value="1">5002-Tahsin 3 Buku Jilid 3.1</option>
                                <option value="2">6001-Tahsin 4 Buku Jilid 3.2</option>
                                <option value="2">6003-Tahsin 4 Buku Jilid 3.2</option>
                            </select>
                            </div>
                            <label for="day" class="col-sm-2 col-form-label text-right">Hari :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-sm" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="subject" class="col-sm-2 col-form-label text-right">Mata Pelajaran :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-sm" placeholder="">
                            </div>
                            <label for="time" class="col-sm-2 col-form-label text-right">Waktu :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-sm" placeholder="">
                            </div>
                        </div>
                        </form>
                        </div>
                        </div>
                    <br>
                    <h4 class="text-info"> Daftar Peserta </h4>
                    <br>
                    <table class="table table-custom table-sm">
                        <thead class="thead-custom">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Semester</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama Peserta</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Angkatan</th>
                            <th scope="col">Level</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>001</td>
                                    <td>0000000001</td>
                                    <td>Wulandari</td>
                                    <td>Ilmu Komputer</td>
                                    <td>2014</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>001</td>
                                    <td>0000000002</td>
                                    <td>Retno</td>
                                    <td>Ilmu Komputer</td>
                                    <td>2014</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>001</td>
                                    <td>0000000003</td>
                                    <td>Rara</td>
                                    <td>Ilmu Komputer</td>
                                    <td>2014</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td scope="row">4</td>
                                    <td>001</td>
                                    <td>0000000004</td>
                                    <td>Riri</td>
                                    <td>Ilmu Komputer</td>
                                    <td>2014</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td scope="row">5</td>
                                    <td>001</td>
                                    <td>0000000005</td>
                                    <td>Fitri</td>
                                    <td>Ilmu Komputer</td>
                                    <td>2014</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td scope="row">6</td>
                                    <td>001</td>
                                    <td>0000000006</td>
                                    <td>Dian</td>
                                    <td>Ilmu Komputer</td>
                                    <td>2014</td>
                                    <td>6</td>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
