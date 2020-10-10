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
                        <dl class="row">
                            <div class="col-md-6">
                            <div class="row">
                                <dt class="col-sm-4 text-right">Nomor Induk :</dt>
                                <dd class="col-sm-8">{{auth()->user()->peserta->nis}}</dd>
                                <dt class="col-sm-4 text-right">Level :</dt>
                                <dd class="col-sm-8">
                                    @php $level = auth()->user()->peserta->level @endphp
                                    @if ($level == 1)
                                        Pra Tahsin 1
                                    @elseif($level == 2)
                                        Pra Tahsin 2
                                    @elseif($level == 3)
                                        Tahsin 1
                                    @elseif($level == 4)
                                        Tahsin 2
                                    @elseif($level == 5)
                                        Tahsin 3
                                    @elseif($level == 6)
                                        Tahsin 4
                                    @endif
                                </dd>
                                <dt class="col-sm-4 text-right">Semester Masuk :</dt>
                                <dd class="col-sm-8">{{auth()->user()->peserta->semester_masuk}}</dd>
                            </div>
                            </div>
                        </dl>
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
                <form action="{{ route('peserta.updateprofil', auth()->user()->peserta->id) }}" method="POST">
                @csrf
                @method('PUT')

                    <div class="form-group row">
                        <label for="nama_peserta" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" name="nama_peserta" value="{{ auth()->user()->peserta->nama_peserta }}" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="instansi" class="col-sm-2 col-form-label">Instansi</label>
                        <div class="col-sm-10">
                            <select id="instansi" class="custom-select" name="instansi" required>
                                <option selected>{{ auth()->user()->peserta->instansi }}</option>
                                <option value="UNJ">UNJ</option>
                                <option value="Umum">Umum</option>
                            </select>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <select id="fakultas" class="custom-select" name="fakultas" required>
                                <option selected>{{ auth()->user()->peserta->fakultas }}</option>
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
                    <div class="form-group row">
                        <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                        <div class="col-sm-10">
                        <input type="text" name="prodi" value="{{ auth()->user()->peserta->prodi }}" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                        <div class="col-sm-10">
                        <input type="text" name="angkatan" value="{{ auth()->user()->peserta->angkatan }}" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-10">
                        <input type="text" name="no_hp" value="{{ auth()->user()->peserta->no_hp }}" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="text" name="email" value="{{ auth()->user()->peserta->email }}" class="form-control" placeholder="" readonly> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                        <input type="text" name="jenis_kelamin" value="{{ auth()->user()->peserta->jenis_kelamin }}" class="form-control" placeholder="" readonly>
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
