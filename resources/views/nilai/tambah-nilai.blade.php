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
                <form action="{{ route('nilai.store') }}" method="POST">
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
                                <label for="kode_matpel" class="col-3 col-form-label text-right"><strong>Kode Matpel :</strong></label>
                                <div class="col-9">
                                <input type="text" name="kode_matpel" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="nilai_lisan" class="col-3 col-form-label text-right"><strong>Nilai Lisan :</strong></label>
                                <div class="col-9">
                                <input type="text" name="nilai_lisan" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="nilai_teori" class="col-3 col-form-label text-right"><strong>Nilai Teori :</strong></label>
                                <div class="col-9">
                                <input type="text" name="nilai_teori" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="nilai_akhir" class="col-3 col-form-label text-right"><strong>Nilai Akhir :</strong></label>
                                <div class="col-9">
                                <input type="text" name="nilai_akhir" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="kkm" class="col-3 col-form-label text-right"><strong>KKM :</strong></label>
                                <div class="col-9">
                                <input type="text" name="kkm" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="keterangan" class="col-3 col-form-label text-right"><strong>Keterangan :</strong></label>
                                <div class="col-9">
                                    <select id="keterangan" class="custom-select" name="keterangan" required>
                                        <option selected>Pilih</option>
                                        <option value="Lulus">Lulus</option>
                                        <option value="Belum Lulus">Belum Lulus</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="penguji" class="col-3 col-form-label text-right"><strong>Penguji :</strong></label>
                                <div class="col-9">
                                <input type="text" name="penguji" class="form-control" placeholder="">
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
