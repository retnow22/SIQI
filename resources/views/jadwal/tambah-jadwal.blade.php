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
            <div class="card">
                <div class="card-header text-primary">Tambah Jadwal</div>

                <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <a class="btn btn-sm btn-primary" href="{{ route('jadwal.index') }}">Kembali</a>
                        </div>
                    </div>
                </div>
                <br>
                <form action="{{ route('jadwal.store') }}" method="POST">
                    @csrf
                
                    <div class="row">
                        <div class="col-8">
                            <div class="row">
                                <label for="kode_matpel" class="col-3 col-form-label text-right"><strong>Kode Matpel :</strong></label>
                                <div class="col-9">
                                <input type="text" name="kode_matpel" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="nama_matpel" class="col-3 col-form-label text-right"><strong>Nama Matpel :</strong></label>
                                <div class="col-9">
                                <input type="text" name="nama_matpel" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="semester" class="col-3 col-form-label text-right"><strong>Semester :</strong></label>
                                <div class="col-9">
                                <input type="text" name="semester" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="hari" class="col-3 col-form-label text-right"><strong>Hari :</strong></label>
                                <div class="col-9">
                                <input type="text" name="hari" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="waktu" class="col-3 col-form-label text-right"><strong>Waktu :</strong></label>
                                <div class="col-9">
                                <input type="text" name="waktu" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="level" class="col-3 col-form-label text-right"><strong>Level :</strong></label>
                                <div class="col-9">
                                <input type="text" name="level" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="kode_pengajar" class="col-3 col-form-label text-right"><strong>Kode Pengajar :</strong></label>
                                <div class="col-9">
                                <input type="text" name="kode_pengajar" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="kuota" class="col-3 col-form-label text-right"><strong>Kuota :</strong></label>
                                <div class="col-9">
                                <input type="text" name="kuota" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
