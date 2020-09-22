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
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-light mb-3">
                <div class="card-header text-primary"></div>
                <div class="card-body">
                    <div class ="row">
                        <div class="col-3">
                            <div class ="row">
                                <label for="searchSchedule" class="col-sm-3 text-right">Cari :</label>
                                <div class="col-sm-9 input-group input-group-sm mb-3">
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
                                            <a class="btn btn-md btn-primary" href="{{ route('jadwal.create') }}">
                                                <i class="fa fa-plus"></i> TAMBAH JADWAL
                                            </a>                                                
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
                            <!-- <th scope="col">Pengajar</th> -->
                            <th scope="col">Kuota</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                            <tbody>
                            @foreach ($jadwal as $key => $matpel)
                                <tr>
                                    <td scope="row">{{ $key + 1 }}</td>
                                    <td>{{ $matpel->kode_matpel }}</td>
                                    <td>{{ $matpel->nama_matpel }}</td>
                                    <td>{{ $matpel->semester }}</td>
                                    <td>{{ $matpel->hari }}</td>
                                    <td>{{ $matpel->waktu }}</td>
                                    <td>{{ $matpel->level }}</td>
                                    <td>{{ $matpel->kode_pengajar }}</td>
                                    <td>{{ $matpel->kuota }}</td>
                                    <td>
                                        <form action="{{ route('jadwal.destroy',$matpel->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary" href="{{ route('jadwal.edit',$matpel->id) }}">
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
