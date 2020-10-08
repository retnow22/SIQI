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
            <div class="card">
                <div class="card-header text-primary">Tambah Akun</div>

                <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <a class="btn btn-sm btn-primary" href="{{ route('akun.index') }}">Kembali</a>
                        </div>
                    </div>
                </div>
                <br>
                <form action="{{ route('akun.update', $akun->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                
                    <div class="row">
                        <div class="col-8">
                            <div class="row">
                                <label for="name" class="col-3 col-form-label text-right"><strong>Username :</strong></label>
                                <div class="col-9">
                                <input type="text" name="name" value="{{ $akun->name }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="email" class="col-3 col-form-label text-right"><strong>Email :</strong></label>
                                <div class="col-9">
                                <input type="text" name="email" value="{{ $akun->email }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="password" class="col-3 col-form-label text-right"><strong>Password :</strong></label>
                                <div class="col-9">
                                <input type="text" name="password" value="{{ $akun->password }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="role" class="col-3 col-form-label text-right"><strong>Role :</strong></label>
                                <div class="col-9">
                                    <select id="role" class="custom-select" name="role" required>
                                        <option selected>{{ $akun->role }}</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Pengajar">Pengajar</option>
                                        <option value="Peserta">Peserta</option>
                                    </select>
                                </div>
                            </div>                           
                            <br>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
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
