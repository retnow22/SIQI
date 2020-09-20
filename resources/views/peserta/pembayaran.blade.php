@extends('layouts.app')

@section('content')
<div class="container">     
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span><i class="fa fa-credit-card-alt"></i></span>
				<span>Status Pembayaran</span>
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
                                <dd class="col-sm-8">0000000001</dd>
                                <dt class="col-sm-4 text-right">Nama :</dt>
                                <dd class="col-sm-8">{{ Auth::user()->name }} </dd>
                                <dt class="col-sm-4 text-right">Level :</dt>
                                <dd class="col-sm-8">Tahsin 4</dd>
                                <dt class="col-sm-4 text-right">Semester Masuk :</dt>
                                <dd class="col-sm-8">001</dd>
                            </div>
                            </div>
                        </dl>
                    </p>
                    <br>
                    <table class="table table-custom table-sm">
                        <thead class="thead-custom">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Total Tagihan</th>
                            <th scope="col">Jumlah Pembayaran</th>
                            <th scope="col">Tanggal Pembayaran</th>
                            <th scope="col">Status</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>001</td>
                                    <td>60.000</td>
                                    <td>60.000</td>
                                    <td>13/03/19</td>
                                    <td>Lunas</td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>002</td>
                                    <td>60.000</td>
                                    <td>20.000</td>
                                    <td>11/10/19</td>
                                    <td>Belum Lunas</td>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
