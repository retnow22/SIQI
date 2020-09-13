@extends('layouts.app')

@section('content')
<div class="container">     
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span><i class="fa fa-edit"></i></span>
				<span>Laporan Pengajar</span>
            </li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-light mb-3">
                <div class="card-header text-primary"></div>
                <div class="card-body">
                    <p class="card-text">
                        <dl class="row">
                            <div class="col-md-6">
                            <div class="row">
                                <dt class="col-sm-4 text-right">Nomor Induk :</dt>
                                <dd class="col-sm-8">4000000001</dd>
                                <dt class="col-sm-4 text-right">Nama :</dt>
                                <dd class="col-sm-8">{{ Auth::user()->name }} </dd>
                                <dt class="col-sm-4 text-right">Level :</dt>
                                <dd class="col-sm-8">Tahsin 4</dd>
                                <dt class="col-sm-4 text-right">Kode Pengajar :</dt>
                                <dd class="col-sm-8">RWD</dd>
                            </div>
                            </div>
                        </dl>
                    </p>
                    <br>
                    <h4 class="text-info"> Presensi Peserta </h4>
                    <br>
                        <div class ="row">
                        <div class="col-12">
                        <form>
                        <div class="form-group row">
                            <label for="inputInstansi" class="col-sm-2 col-form-label text-right">Pilih Rombel :</label>
                            <div class="col-sm-4">
                            <select class="form-control form-control-sm">
                                <option selected>Select</option>
                                <option value="1">5002-Tahsin 3 Buku Jilid 3.1</option>
                                <option value="2">6001-Tahsin 4 Buku Jilid 3.2</option>
                                <option value="2">6003-Tahsin 4 Buku Jilid 3.2</option>
                            </select>
                            </div>
                            <label for="lesson" class="col-sm-2 col-form-label text-right">Materi :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-sm" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="subject" class="col-sm-2 col-form-label text-right">Mata Pelajaran :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-sm" placeholder="">
                            </div>
                            <label for="time" class="col-sm-2 col-form-label text-right">Waktu dimulai :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-sm" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-2 col-form-label text-right">Tanggal :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-sm" placeholder="">
                            </div>
                            <label for="time" class="col-sm-2 col-form-label text-right">Waktu selesai :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-sm" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="evaluasi" class="col-sm-2 col-form-label text-right">Evaluasi :</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" id="evaluasi" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 text-right">Presensi :</div>
                            <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                Retno
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck2">
                                <label class="form-check-label" for="gridCheck2">
                                Wulandari
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck3">
                                <label class="form-check-label" for="gridCheck3">
                                Rara
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck4">
                                <label class="form-check-label" for="gridCheck4">
                                Riri
                                </label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-sm-10 offset-md-5">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                        </form>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
