@extends('layouts.app')

@section('content')
<div class="container">     
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span><i class="fa fa-user"></i></span>
				<span>Data Peserta</span>
            </li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-light mb-3">
                <div class="card-header text-primary"></div>
                <div class="card-body">
                    <div class ="row">
                        <div class="col-sm-12">
                        <div class="row">
                                <div class="col-sm-3">
                                <div class="row">
                                    <label for="searchUser" class="col-sm-3 text-right">Cari :</label>
                                    <div class="col-sm-9 input-group input-group-sm mb-3">
                                        <input type="text" class="form-control" placeholder="Ketik username" aria-label="Account's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-5">
                                </div>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-10">
                                            <button class="btn btn-md btn-primary" onclick="">
                                                <i class="fa fa-plus"></i> TAMBAH DATA
                                            </button>
                                            <button class="btn btn-md btn-primary" onclick="">
                                                EKSPORT DATA
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </div>        
                        </div>
                    </div>
                    <table class="table table-custom table-sm">
                        <thead class="thead-custom">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama Peserta</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col">Instansi</th>
                            <th scope="col">Angkatan</th>
                            <th scope="col">No Hp</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Level</th>
                            <th scope="col">Status Pembayaran</th>
                            <th scope="col">Semester Masuk</th>
                            <th scope="col">Username</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>0000000001</td>
                                    <td>Retno Wulandari</td>
                                    <td>Ilmu Komputer</td>
                                    <td>FMIPA</td>
                                    <td>UNJ</td>
                                    <td>2014</td>
                                    <td>081932993706</td>
                                    <td>retno@gmail.com</td>
                                    <td>Perempuan</td>
                                    <td>6</td>
                                    <td>Lunas</td>
                                    <td>001</td>
                                    <td>retno41</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				<i class="fa fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				<i class="fa fa-eraser"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>0000000002</td>
                                    <td>Wulandari</td>
                                    <td>Ilmu Komputer</td>
                                    <td>FMIPA</td>
                                    <td>UNJ</td>
                                    <td>2014</td>
                                    <td>08193333333</td>
                                    <td>retno1@gmail.com</td>
                                    <td>Perempuan</td>
                                    <td>5</td>
                                    <td>Lunas</td>
                                    <td>001</td>
                                    <td>retno31</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				<i class="fa fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				<i class="fa fa-eraser"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>0000000003</td>
                                    <td>Ira Sumira</td>
                                    <td>Bisnis</td>
                                    <td>FE</td>
                                    <td>UNJ</td>
                                    <td>2017</td>
                                    <td>08193222222</td>
                                    <td>ira@gmail.com</td>
                                    <td>Perempuan</td>
                                    <td>2</td>
                                    <td>Belum Lunas</td>
                                    <td>001</td>
                                    <td>ira21</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				<i class="fa fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				<i class="fa fa-eraser"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">4</td>
                                    <td>0000000004</td>
                                    <td>Bella</td>
                                    <td>Pendidikan Agama Islam</td>
                                    <td>FIS</td>
                                    <td>UNJ</td>
                                    <td>2016</td>
                                    <td>08199999999</td>
                                    <td>bella@gmail.com</td>
                                    <td>Perempuan</td>
                                    <td>6</td>
                                    <td>Lunas</td>
                                    <td>001</td>
                                    <td>bella41</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				<i class="fa fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				<i class="fa fa-eraser"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">5</td>
                                    <td>0000000005</td>
                                    <td>Ani</td>
                                    <td>Bimbingan Konseling</td>
                                    <td>FIP</td>
                                    <td>UNJ</td>
                                    <td>2016</td>
                                    <td>08193299999</td>
                                    <td>ani@gmail.com</td>
                                    <td>Perempuan</td>
                                    <td>5</td>
                                    <td>Lunas</td>
                                    <td>001</td>
                                    <td>ani31</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				<i class="fa fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				<i class="fa fa-eraser"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                    </table>
                    <br>
                    <br>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
