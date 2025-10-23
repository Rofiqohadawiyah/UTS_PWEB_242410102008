@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
    <h2>Selamat datang, {{ $username }}!</h2>
    <p class="mt-3">
        Ini adalah halaman utama <strong>Sistem Pengelolaan Alat Pertanian</strong>.
    </p>
    <p class="text-muted">
        Melalui website ini, Anda dapat melihat daftar alat pertanian yang tersedia, 
        serta mengelola informasi pengguna dengan mudah.
    </p>
</div>
@endsection
