@extends('layouts.app')

@section('content')
<div class="container">     
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span><i class="fa fa-user-circle-o"></i></span>
				<span>Kelola Akun</span>
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
                                                <i class="fa fa-plus"></i> TAMBAH AKUN
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
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>admin1</td>
                                    <td>admin1</td>
                                    <td>admin</td>
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
                                    <td>admin2</td>
                                    <td>admin2</td>
                                    <td>admin</td>
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
                                    <td>retno41</td>
                                    <td>retno41</td>
                                    <td>teacher</td>
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
                                    <td>wulan21</td>
                                    <td>wulan21</td>
                                    <td>student</td>
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
                                    <td>zahra42</td>
                                    <td>zahra42</td>
                                    <td>teacher</td>
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
