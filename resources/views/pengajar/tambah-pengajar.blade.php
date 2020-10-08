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
                <form action="{{ route('pengajar.store') }}" method="POST">
                    @csrf
                
                    <div class="row">
                        <div class="col-8">
                            <div class="row">
                                <label for="nip" class="col-3 col-form-label text-right"><strong>NIP :</strong></label>
                                <div class="col-9">
                                <input type="text" name="nip" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="nama_pengajar" class="col-3 col-form-label text-right"><strong>Nama Pengajar :</strong></label>
                                <div class="col-9">
                                <input type="text" name="nama_pengajar" class="form-control" placeholder="">
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
                                    <select id="fakultas" class="custom-select" name="fakultas" required>
                                        <option selected>Pilih</option>
                                        <option value="FIP">FIP</option>
                                        <option value="FT">FT</option>
                                        <option value="FMIPA">FMIPA</option>
                                        <option value="FE">FE</option>
                                        <option value="FBS">FBS</option>
                                        <option value="FIS">FIS</option>
                                        <option value="FIK">FIK</option>
                                        <option value="FPPsi">FPPsi</option>
                                        <option value="Umum">Umum</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="instansi" class="col-3 col-form-label text-right"><strong>Instansi :</strong></label>
                                <div class="col-9">
                                    <select id="instansi" class="custom-select" name="instansi" required>
                                        <option selected>Pilih</option>
                                        <option value="UNJ">UNJ</option>
                                        <option value="Umum">Umum</option>
                                    </select>
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
                            </div>
                            <br>
                            <div class="row">
                                <label for="jenis_kelamin" class="col-3 col-form-label text-right"><strong>Jenis Kelamin :</strong></label>
                                <div class="col-9">
                                    <select id="jenis_kelamin" class="custom-select" name="jenis_kelamin" required>
                                        <option selected>Pilih</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="level" class="col-3 col-form-label text-right"><strong>Level :</strong></label>
                                <div class="col-9">
                                    <select id="level" class="custom-select" name="level" required>
                                        <option selected>Pilih</option>
                                        <option value="1">Pra Tahsin 1</option>
                                        <option value="2">Pra Tahsin 2</option>
                                        <option value="3">Tahsin 1</option>
                                        <option value="4">Tahsin 2</option>
                                        <option value="5">Tahsin 3</option>
                                        <option value="6">Tahsin 4</option>
                                    </select>
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
                                <label for="userid" class="col-3 col-form-label text-right"><strong>Userid :</strong></label>
                                <div class="col-9">
                                <input type="text" name="userid" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
