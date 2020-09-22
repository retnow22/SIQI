@extends('layouts.app')

@section('content')
<div class="container">     
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span><i class="fa fa-user"></i></span>
				<span>Data Pengajar</span>
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
                            <a class="btn btn-sm btn-primary" href="{{ route('pengajar.index') }}">Kembali</a>
                        </div>
                    </div>
                </div>
                <br>
                <form action="{{ route('pengajar.update',$pengajar->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                
                    <div class="row">
                        <div class="col-8">
                            <div class="row">
                                <label for="nip" class="col-3 col-form-label text-right"><strong>NIP :</strong></label>
                                <div class="col-9">
                                <input type="text" name="nip" value="{{ $pengajar->nip }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="nama_pengajar" class="col-3 col-form-label text-right"><strong>Nama Pengajar :</strong></label>
                                <div class="col-9">
                                <input type="text" name="nama_pengajar" value="{{ $pengajar->nama_pengajar }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="prodi" class="col-3 col-form-label text-right"><strong>Prodi :</strong></label>
                                <div class="col-9">
                                <input type="text" name="prodi" value="{{ $pengajar->prodi }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="fakultas" class="col-3 col-form-label text-right"><strong>Fakultas :</strong></label>
                                <div class="col-9">
                                <input type="text" name="fakultas" value="{{ $pengajar->fakultas }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="instansi" class="col-3 col-form-label text-right"><strong>Instansi :</strong></label>
                                <div class="col-9">
                                <input type="text" name="instansi" value="{{ $pengajar->instansi }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="no_hp" class="col-3 col-form-label text-right"><strong>No Hp :</strong></label>
                                <div class="col-9">
                                <input type="text" name="no_hp" value="{{ $pengajar->no_hp }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="email" class="col-3 col-form-label text-right"><strong>Email :</strong></label>
                                <div class="col-9">
                                <input type="text" name="email" value="{{ $pengajar->email }}" class="form-control" placeholder="">
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
                                <input type="text" name="jenis_kelamin" value="{{ $pengajar->jenis_kelamin }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="level" class="col-3 col-form-label text-right"><strong>Level :</strong></label>
                                <div class="col-9">
                                <input type="text" name="level" value="{{ $pengajar->level }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="kode_pengajar" class="col-3 col-form-label text-right"><strong>Kode Pengajar :</strong></label>
                                <div class="col-9">
                                <input type="text" name="kode_pengajar" value="{{ $pengajar->kode_pengajar }}" class="form-control" placeholder="">
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
