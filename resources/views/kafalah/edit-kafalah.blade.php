@extends('layouts.app')

@section('content')
<div class="container">     
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span><i class="fa fa-envelope"></i></span>
				<span>Hadiah Pengajar</span>
            </li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-primary">Input Kafalah</div>

                <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <a class="btn btn-sm btn-primary" href="{{ route('kafalah.index') }}">Kembali</a>
                        </div>
                    </div>
                </div>
                <br>
                <form action="{{ route('kafalah.update',$kafalah->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                
                    <div class="row">
                        <div class="col-8">
                            <div class="row">
                                <label for="semester" class="col-3 col-form-label text-right"><strong>Semester :</strong></label>
                                <div class="col-9">
                                <input type="text" name="semester" value="{{ $kafalah->semester }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="nip" class="col-3 col-form-label text-right"><strong>NIP :</strong></label>
                                <div class="col-9">
                                <input type="text" name="nip" value="{{ $kafalah->nip }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="jumlah_mengajar" class="col-3 col-form-label text-right"><strong>Jumlah Mengajar :</strong></label>
                                <div class="col-9">
                                <input type="text" name="jumlah_mengajar" value="{{ $kafalah->jumlah_mengajar }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="nominal" class="col-3 col-form-label text-right"><strong>Nominal :</strong></label>
                                <div class="col-9">
                                <input type="text" name="nominal" value="{{ $kafalah->nominal }}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="total_pembayaran" class="col-3 col-form-label text-right"><strong> Total Pembayaran :</strong></label>
                                <div class="col-9">
                                <input type="text" name="total_pembayaran" value="{{ $kafalah->total_pembayaran }}" class="form-control" placeholder="">
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
