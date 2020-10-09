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
                <div class="card-header text-primary">Status Pengajar</div>
                <div class="card-body">
                    <p class="card-text">
                        <dl class="row">
                            <div class="col-md-6">
                            <div class="row">
                                <dt class="col-sm-4 text-right">Nomor Induk :</dt>
                                <dd class="col-sm-8">{{auth()->user()->pengajar->nip}}</dd>
                                <dt class="col-sm-4 text-right">Level :</dt>
                                <dd class="col-sm-8">
                                    @php $level = auth()->user()->pengajar->level @endphp
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
                                <dt class="col-sm-4 text-right">Kode Pengajar :</dt>
                                <dd class="col-sm-8">{{auth()->user()->pengajar->kode_pengajar}}</dd>
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
                <div class="card-header text-primary">Biodata Pengajar</div>

                <div class="card-body">
                <form action="{{ route('pengajar.updateprofil', auth()->user()->pengajar->id) }}" method="POST">
                @csrf
                @method('PUT')

                    <div class="form-group row">
                        <label for="nama_pengajar" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" name="nama_pengajar" value="{{ auth()->user()->pengajar->nama_pengajar }}" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="instansi" class="col-sm-2 col-form-label">Instansi</label>
                        <div class="col-sm-10">
                            <select id="instansi" class="custom-select" name="instansi" required>
                                <option selected>{{ auth()->user()->pengajar->instansi }}</option>
                                <option value="UNJ">UNJ</option>
                                <option value="Umum">Umum</option>
                            </select>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <select id="fakultas" class="custom-select" name="fakultas" required>
                                <option selected>{{ auth()->user()->pengajar->fakultas }}</option>
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
                        <input type="text" name="prodi" value="{{ auth()->user()->pengajar->prodi }}" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-10">
                        <input type="text" name="no_hp" value="{{ auth()->user()->pengajar->no_hp }}" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="text" name="email" value="{{ auth()->user()->pengajar->email }}" class="form-control" placeholder="" readonly> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                        <input type="text" name="jenis_kelamin" value="{{ auth()->user()->pengajar->jenis_kelamin }}" class="form-control" placeholder="" readonly>
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
