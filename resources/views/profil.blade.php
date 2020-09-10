@extends('layouts.app')

@section('content')
<div class="container">     
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span><i class="fa fa-user-circle-o"></i></span>
				<span>Profil</span>
            </li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-light mb-3">
                <div class="card-header text-primary">Status Peserta</div>
                <div class="card-body">
                    <p class="card-text">
                        Nomor Induk     : 0000000001
                        <br> 
                        Level           : Tahsin 1
                        <br>
                        Semester Masuk  : 001
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-primary">Biodata Peserta</div>

                <div class="card-body">
                <form>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputInstansi" class="col-sm-2 col-form-label">Instansi</label>
                        <div class="col-sm-10">
                        <select class="custom-select">
                            <option selected>Open this select menu</option>
                            <option value="1">UNJ</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputFakultas" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                        <select class="custom-select">
                            <option selected>Open this select menu</option>
                            <option value="1">Fmipa</option>
                            <option value="2">FIP</option>
                            <option value="3">FIS</option>
                            <option value="4">FT</option>
                            <option value="5">FBS</option>
                            <option value="6">FE</option>
                            <option value="7">FPPsi</option>
                            <option value="8">FIK</option>
                            <option value="9">Other</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Prodi</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Angkatan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phoneNumber" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">Jenis Kelamin</div>
                        <div class="col-sm-10">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio1">Laki-laki</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio2">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-5">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
