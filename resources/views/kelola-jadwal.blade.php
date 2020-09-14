@extends('layouts.app')

@section('content')
<div class="container">     
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span><i class="fa fa-calendar"></i></span>
				<span>Kelola Jadwal</span>
            </li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-light mb-3">
                <div class="card-header text-primary"></div>
                <div class="card-body">
                    <div class ="row">
                        <div class="col-4">
                            <div class ="row">
                                <label for="searchSchedule" class="col-sm-2 text-right">Cari :</label>
                                <div class="col-sm-10 input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" placeholder="" aria-label="jadwal" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class ="row">
                        <div class="col-sm-12">
                        <div class="row">
                                <div class="col-sm-3 input-group input-group-sm mb-3">
                                    <select class="custom-select" id="inputGroupSelect02">
                                        <option selected>Pilih</option>
                                        <option value="1">001</option>
                                        <option value="2">002</option>
                                        <option value="3">003</option>
                                    </select>
                                    <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect02">Pilih Semester</label>
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
                                                <i class="fa fa-plus"></i> TAMBAH JADWAL
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
                            <th scope="col">Kode MP</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Hari</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Level</th>
                            <th scope="col">Kode Pengajar</th>
                            <th scope="col">Pengajar</th>
                            <th scope="col">Kuota</th>
                            <th scope="col">Action</th>
                        </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>1001</td>
                                    <td>Pra Tahsin 1 Buku Jilid 1.1</td>
                                    <td>001</td>
                                    <td>Senin</td>
                                    <td>08.00-10.00</td>
                                    <td>1</td>
                                    <td>RWD</td>
                                    <td>Retno Wulandari</td>
                                    <td>10</td>
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
                                    <td>1002</td>
                                    <td>Pra Tahsin 1 Buku Jilid 1.1</td>
                                    <td>001</td>
                                    <td>Senin</td>
                                    <td>08.00-10.00</td>
                                    <td>1</td>
                                    <td>SA</td>
                                    <td>Shifa Aulia</td>
                                    <td>10</td>
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
                                    <td>1003</td>
                                    <td>Pra Tahsin 1 Buku Jilid 1.1</td>
                                    <td>001</td>
                                    <td>Selasa</td>
                                    <td>08.00-10.00</td>
                                    <td>1</td>
                                    <td>AST</td>
                                    <td>Adetia Suryani Tantry</td>
                                    <td>10</td>
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
                                    <td>2001</td>
                                    <td>Pra Tahsin 2 Buku Jilid 1.2</td>
                                    <td>001</td>
                                    <td>Senin</td>
                                    <td>08.00-10.00</td>
                                    <td>1</td>
                                    <td>RWD</td>
                                    <td>Retno Wulandari</td>
                                    <td>10</td>
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
                                    <td>2002</td>
                                    <td>Pra Tahsin 2 Buku Jilid 1.2</td>
                                    <td>001</td>
                                    <td>Senin</td>
                                    <td>10.00-12.00</td>
                                    <td>1</td>
                                    <td>SA</td>
                                    <td>Shifa Aulia</td>
                                    <td>10</td>
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
