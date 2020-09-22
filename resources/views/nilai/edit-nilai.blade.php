@extends('layouts.app')

@section('content')
<div class="container">     
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span><i class="fa fa-graduation-cap"></i></span>
				<span>Nilai UAS</span>
            </li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-primary">Input Nilai</div>

                <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <a class="btn btn-sm btn-primary" href="{{ route('nilai.index') }}">Kembali</a>
                        </div>
                    </div>
                </div>
                <br>
                <form action="{{ route('nilai.update',$nilai->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                
                    <div class="row">
                        <div class="col-8">
                            <div class="row">
                                <label for="nis" class="col-3 col-form-label text-right"><strong>NIS :</strong></label>
                                <div class="col-9">
                                <input type="text" name="nis" value="{{ $nilai->nis }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="kode_matpel" class="col-3 col-form-label text-right"><strong>Kode Matpel :</strong></label>
                                <div class="col-9">
                                <input type="text" name="kode_matpel" value="{{ $nilai->kode_matpel }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="nilai_lisan" class="col-3 col-form-label text-right"><strong>Nilai Lisan :</strong></label>
                                <div class="col-9">
                                <input type="text" name="nilai_lisan" value="{{ $nilai->nilai_lisan }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="nilai_teori" class="col-3 col-form-label text-right"><strong>Nilai Teori :</strong></label>
                                <div class="col-9">
                                <input type="text" name="nilai_teori" value="{{ $nilai->nilai_teori }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="nilai_akhir" class="col-3 col-form-label text-right"><strong>Nilai Akhir :</strong></label>
                                <div class="col-9">
                                <input type="text" name="nilai_akhir" value="{{ $nilai->nilai_akhir }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="kkm" class="col-3 col-form-label text-right"><strong>KKM :</strong></label>
                                <div class="col-9">
                                <input type="text" name="kkm" value="{{ $nilai->kkm }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="keterangan" class="col-3 col-form-label text-right"><strong>Keterangan :</strong></label>
                                <div class="col-9">
                                <input type="text" name="keterangan" value="{{ $nilai->keterangan }}" class="form-control" placeholder="">
                                </div>
                                <!-- <label for="keterangan" class="col-3 col-form-label text-right"><strong>Keterangan :</strong></label>
                                <div class="col-9">
                                <select class="custom-select" value="{{ $nilai->keterangan }}">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Lulus</option>
                                    <option value="2">Belum Lulus</option>
                                </select>
                                </div> -->
                            </div>
                            <br>
                            <div class="row">
                                <label for="penguji" class="col-3 col-form-label text-right"><strong>Penguji :</strong></label>
                                <div class="col-9">
                                <input type="text" name="penguji" value="{{ $nilai->penguji }}" class="form-control" placeholder="">
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
