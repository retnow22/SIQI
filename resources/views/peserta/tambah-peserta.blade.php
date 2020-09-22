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
            <div class="card">
                <div class="card-header text-primary">Tambah Data</div>

                <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <a class="btn btn-sm btn-primary" href="{{ route('peserta.index') }}">Kembali</a>
                        </div>
                    </div>
                </div>
                <br>
                <form action="{{ route('peserta.store') }}" method="POST">
                    @csrf
                
                    <div class="row">
                        <div class="col-8">
                            <div class="row">
                                <label for="nis" class="col-3 col-form-label text-right"><strong>NIS :</strong></label>
                                <div class="col-9">
                                <input type="text" name="nis" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="nama_peserta" class="col-3 col-form-label text-right"><strong>Nama Peserta :</strong></label>
                                <div class="col-9">
                                <input type="text" name="nama_peserta" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="prodi" class="col-3 col-form-label text-right"><strong>Prodi :</strong></label>
                                <div class="col-9">
                                <input type="text" name="prodi" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="fakultas" class="col-3 col-form-label text-right"><strong>Fakultas :</strong></label>
                                <div class="col-9">
                                <input type="text" name="fakultas" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="instansi" class="col-3 col-form-label text-right"><strong>Instansi :</strong></label>
                                <div class="col-9">
                                <input type="text" name="instansi" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="angkatan" class="col-3 col-form-label text-right"><strong>Angkatan :</strong></label>
                                <div class="col-9">
                                <input type="text" name="angkatan" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="no_hp" class="col-3 col-form-label text-right"><strong>No Hp :</strong></label>
                                <div class="col-9">
                                <input type="text" name="no_hp" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="email" class="col-3 col-form-label text-right"><strong>Email :</strong></label>
                                <div class="col-9">
                                <input type="text" name="email" class="form-control" placeholder="">
                                </div>
                                <!-- <label for="keterangan" class="col-3 col-form-label text-right"><strong>Keterangan :</strong></label>
                                <div class="col-9">
                                <select class="custom-select">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Lulus</option>
                                    <option value="2">Belum Lulus</option>
                                </select>
                                </div> -->
                            </div>
                            <br>
                            <div class="row">
                                <label for="jenis_kelamin" class="col-3 col-form-label text-right"><strong>Jenis Kelamin :</strong></label>
                                <div class="col-9">
                                <input type="text" name="jenis_kelamin" class="form-control" placeholder="">
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
                                <label for="status_pembayaran" class="col-3 col-form-label text-right"><strong>Status Pembayaran :</strong></label>
                                <div class="col-9">
                                <input type="text" name="status_pembayaran" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="semester_masuk" class="col-3 col-form-label text-right"><strong>Semester Masuk :</strong></label>
                                <div class="col-9">
                                <input type="text" name="semester_masuk" class="form-control" placeholder="">
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
