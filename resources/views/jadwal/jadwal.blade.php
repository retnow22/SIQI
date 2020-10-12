@php $role = auth()->user()->role @endphp

@if($role == 'Admin')
    @include('jadwal/kelola-jadwal')
@elseif( $role == 'Pengajar')
    @include('jadwal/pengajar-kelola-jadwal')
@endif