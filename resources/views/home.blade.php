@extends('layouts.app')

@section('content')
<div class="container">     
        <div class="alert alert-success" role="alert">               
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
               {{ __('You are logged in!') }}
               <br>
               Selamat Datang {{ Auth::user()->name }}^^
       </div>
</div>
@endsection
