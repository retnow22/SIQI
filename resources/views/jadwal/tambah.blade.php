@php $role = auth()->user()->role @endphp

@if($role == 'Admin')
    @include('jadwal/admin-tambah')
@elseif( $role == 'Pengajar')
    @include('jadwal/pengajar-tambah')
@endif