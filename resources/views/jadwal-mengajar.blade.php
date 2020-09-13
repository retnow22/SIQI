@extends('layouts.app')

@section('content')
<div class="container">     
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span><i class="fa fa-calendar"></i></span>
				<span>Jadwal Mengajar</span>
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
                        <!-- <div class ="row">
                        <div class="col-md-4">
                        <form>
                        <div class="form-group row">
                            <label for="inputInstansi" class="col-sm-6 col-form-label text-right">Semester :</label>
                            <div class="col-sm-6">
                            <select class="custom-select">
                                <option selected>Select</option>
                                <option value="1">001</option>
                                <option value="2">002</option>
                            </select>
                            </div>
                        </div>
                        </form>
                        </div>
                        </div>
                    <br> -->
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
                            <th scope="col">Pilih Jadwal</th>                          
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>0041</td>
                                    <td>Tahsin 4 Buku Jilid 3.2</td>
                                    <td>001</td>
                                    <td>Senin</td>
                                    <td>08.00-10.00</td>
                                    <td>6</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				+
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>0042</td>
                                    <td>Tahsin 4 Buku Jilid 3.2</td>
                                    <td>001</td>
                                    <td>Senin</td>
                                    <td>08.00-10.00</td>
                                    <td>6</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				+
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>0043</td>
                                    <td>Tahsin 4 Buku Jilid 3.2</td>
                                    <td>001</td>
                                    <td>Senin</td>
                                    <td>10.00-12.00</td>
                                    <td>6</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				+
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">4</td>
                                    <td>0031</td>
                                    <td>Tahsin 3 Buku Jilid 3.1</td>
                                    <td>001</td>
                                    <td>Senin</td>
                                    <td>08.00-10.00</td>
                                    <td>5</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				+
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">5</td>
                                    <td>0032</td>
                                    <td>Tahsin 3 Buku Jilid 3.1</td>
                                    <td>001</td>
                                    <td>Senin</td>
                                    <td>10.00-12.00</td>
                                    <td>5</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				+
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">6</td>
                                    <td>0033</td>
                                    <td>Tahsin 3 Buku Jilid 3.1</td>
                                    <td>001</td>
                                    <td>Selasa</td>
                                    <td>08.00-10.00</td>
                                    <td>5</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				+
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
