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
                                            <a class="btn btn-md btn-primary" href="{{ route('peserta.create') }}">
                                                <i class="fa fa-plus"></i> TAMBAH DATA
                                            </a>
                                            <button class="btn btn-md btn-primary" onclick="">
                                                EKSPORT DATA
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </div>        
                        </div>
                    </div>
                    <table class="table table-responsive table-custom table-sm">
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
                            <th scope="col">Semester Masuk</th>
                            <th scope="col">Userid</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                            <tbody>
                            @foreach ($peserta as $key => $peserta)
                                <tr>
                                    <td scope="row">{{ $key + 1 }}</td>
                                    <td>{{ $peserta->nis }}</td>
                                    <td>{{ $peserta->nama_peserta }}</td>
                                    <td>{{ $peserta->prodi }}</td>
                                    <td>{{ $peserta->fakultas }}</td>
                                    <td>{{ $peserta->instansi }}</td>
                                    <td>{{ $peserta->angkatan }}</td>
                                    <td>{{ $peserta->no_hp }}</td>
                                    <td>{{ $peserta->email }}</td>
                                    <td>{{ $peserta->jenis_kelamin }}</td>
                                    <td>{{ $peserta->level }}</td>
                                    <td>{{ $peserta->semester_masuk }}</td>
                                    <td>{{ $peserta->userid }}</td>
                                    <td>
                                        <form action="{{ route('peserta.destroy',$peserta->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary" href="{{ route('peserta.edit',$peserta->id) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa fa-eraser"></i>
                                        </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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
