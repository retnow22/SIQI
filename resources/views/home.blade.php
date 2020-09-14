@extends('layouts.app')

@section('content')
<div class="container">     
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span><i class="fa fa-home"></i></span>
				<span>Beranda</span>
            </li>
        </ol>
    </nav>
        <div class="alert alert-primary" role="alert">               
            @if (session('status'))
                <div class="alert alert-primary" role="alert">
                    {{ session('status') }}
                </div>
            @endif
               {{ __('') }}
                Selamat Datang {{ Auth::user()->name }} ^^
                <br>
                Di Sistem Informasi Akademik Study Quran Intensive Quran Institute UNJ (SIQI)
        </div>
</div>
@endsection
