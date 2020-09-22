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
            <div class="card border-light mb-3">
                <div class="card-header text-primary"></div>
                <div class="card-body">
                    <div class ="row">
                        <div class="col-3">
                            <div class ="row">
                                <label for="searchSchedule" class="col-sm-3 text-right">Cari :</label>
                                <div class="col-sm-9 input-group input-group-sm mb-3">
                                    <input type="text" class="form-control" placeholder="" aria-label="jadwal" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class ="row">
                        <div class="col-sm-12">
                        <div class="row">
                                <div class="col-sm-3 input-group input-group-sm mb-3">
                                    <select class="custom-select" id="inputGroupSelect02">
                                        <option selected>Pilih</option>
                                        <option value="1">001</option>
                                        <option value="2">002</option>
                                        <option value="3">003</option>
                                    </select>
                                    <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect02">Pilih Semester</label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                </div>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-10">
                                            <a class="btn btn-md btn-primary" href="{{ route('nilai.create') }}">
                                                <i class="fa fa-plus"></i> TAMBAH DATA
                                            </a>
                                            <button class="btn btn-md btn-primary" onclick="">
                                                EKSPORT DATA
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </div>        
                        </div>
                    </div>
                    <table class="table table-custom table-sm">
                        <thead class="thead-custom">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIS</th>
                            <!-- <th scope="col">Nama Peserta</th> -->
                            <th scope="col">Kode MP</th>
                            <th scope="col">Nilai Lisan</th>
                            <th scope="col">Nilai Teori</th>
                            <th scope="col">Nilai Akhir</th>
                            <th scope="col">KKM</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Penguji</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                            <tbody>
                            @foreach ($nilai as $key => $nilai)
                                <tr>
                                    <td scope="row">{{ $key + 1 }}</td>
                                    <td>{{ $nilai->nis }}</td>
                                    <td>{{ $nilai->kode_matpel }}</td>
                                    <td>{{ $nilai->nilai_lisan }}</td>
                                    <td>{{ $nilai->nilai_teori }}</td>
                                    <td>{{ $nilai->nilai_akhir }}</td>
                                    <td>{{ $nilai->kkm }}</td>
                                    <td>{{ $nilai->keterangan }}</td>
                                    <td>{{ $nilai->penguji }}</td>
                                    <td>
                                        <form action="{{ route('nilai.destroy',$nilai->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary" href="{{ route('nilai.edit',$nilai->id) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa fa-eraser"></i>
                                        </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                    </table>
                    <br>
                    <br>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
