@extends('layouts.app')

@section('content')
<div class="container">     
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span><i class="fa fa-server"></i></span>
				<span>Data Presensi</span>
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
                                <div class="col-sm-4">
                                </div>
                                <div class="col-sm-5">
                                <div class ="row">
                                    <label for="searchName" class="col-sm-5 text-right">Cari :</label>
                                    <div class="col-sm-7 input-group input-group-sm mb-3">
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
                        </div>
                    </div>
                <h4 class="text-info"> Data Kehadiran Pengajar </h4>
                    <div class ="row">
                        <div class="col-12">
                        <div class="row">
                                <div class="col-sm-8">
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
                            <th scope="col">Id</th>
                            <th scope="col">Kode Rombel</th>
                            <th scope="col">Kode MP</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama Pengajar</th>
                            <th scope="col">Per 1</th>
                            <th scope="col">Per 2</th>
                            <th scope="col">Per 3</th>
                            <th scope="col">Per 4</th>
                            <th scope="col">Per 5</th>
                            <th scope="col">Per 6</th>
                            <th scope="col">Per 7</th>
                            <th scope="col">Per 8</th>
                            <th scope="col">Per 9</th>
                            <th scope="col">Per 10</th>
                            <th scope="col">Per 11</th>
                            <th scope="col">T Per</th>
                            <th scope="col">Action</th>
                        </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>0001</td>
                                    <td>6001</td>
                                    <td>0041</td>
                                    <td>4000000001</td>
                                    <td>Retno Wulandari</td>
                                    <td>20/10</td>
                                    <td>27/10</td>
                                    <td>1/11</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>3</td>
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
                                    <td>0002</td>
                                    <td>6002</td>
                                    <td>0042</td>
                                    <td>4000000002</td>
                                    <td>Shifa Aulia</td>
                                    <td>20/10</td>
                                    <td>27/10</td>
                                    <td>1/11</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>3</td>
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
                                    <td>0003</td>
                                    <td>1001</td>
                                    <td>0011</td>
                                    <td>2000000001</td>
                                    <td>Putri Ahma</td>
                                    <td>20/10</td>
                                    <td>27/10</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>2</td>
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
                                    <td>0004</td>
                                    <td>5001</td>
                                    <td>0031</td>
                                    <td>4000000001</td>
                                    <td>Ayu Dini</td>
                                    <td>21/10</td>
                                    <td>28/10</td>
                                    <td>2/11</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>3</td>
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
                                    <td>0005</td>
                                    <td>6003</td>
                                    <td>0043</td>
                                    <td>4000000001</td>
                                    <td>Retno Wulandari</td>
                                    <td>20/10</td>
                                    <td>27/10</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>2</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				<i class="fa fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				<i class="fa fa-eraser"></i>
                                        </button>
                                    </td>
                                </tr>                                                           </tbody>
                    </table>
                    <br>
                    <br>
                    <h4 class="text-info"> Data Kehadiran Peserta </h4>
                    <div class ="row">
                        <div class="col-sm-12">
                        <div class="row">
                                <div class="col-sm-8">
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
                            <th scope="col">Id</th>
                            <th scope="col">Kode Rombel</th>
                            <th scope="col">Kode MP</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama Peserta</th>
                            <th scope="col">Per 1</th>
                            <th scope="col">Per 2</th>
                            <th scope="col">Per 3</th>
                            <th scope="col">Per 4</th>
                            <th scope="col">Per 5</th>
                            <th scope="col">Per 6</th>
                            <th scope="col">Per 7</th>
                            <th scope="col">Per 8</th>
                            <th scope="col">Per 9</th>
                            <th scope="col">Per 10</th>
                            <th scope="col">Per 11</th>
                            <th scope="col">T Per</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>0001</td>
                                    <td>6001</td>
                                    <td>0041</td>
                                    <td>0000000001</td>
                                    <td>Wulandari</td>
                                    <td>20/10</td>
                                    <td>27/10</td>
                                    <td>1/11</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>3</td>
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
                                    <td>0001</td>
                                    <td>6001</td>
                                    <td>0041</td>
                                    <td>0000000010</td>
                                    <td>Putri Ahma</td>
                                    <td>20/10</td>
                                    <td>27/10</td>
                                    <td>1/11</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>3</td>
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
                                    <td>0001</td>
                                    <td>6001</td>
                                    <td>0041</td>
                                    <td>0000000021</td>
                                    <td>Siti Fatimah</td>
                                    <td>20/10</td>
                                    <td>27/10</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>2</td>
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
                                    <td>0004</td>
                                    <td>6001</td>
                                    <td>0041</td>
                                    <td>0000000021</td>
                                    <td>Siti Nurjanah</td>
                                    <td>20/10</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>1</td>
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
                                    <td>0001</td>
                                    <td>6001</td>
                                    <td>0041</td>
                                    <td>0000000040</td>
                                    <td>Yani</td>
                                    <td>20/10</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>1</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				<i class="fa fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-primary" onclick="">
                        				<i class="fa fa-eraser"></i>
                                        </button>
                                    </td>
                                </tr>                                                           </tbody>
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
