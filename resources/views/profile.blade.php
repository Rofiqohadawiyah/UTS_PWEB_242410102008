@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 75vh;">
    <div class="card shadow p-4 text-center" style="max-width: 600px; width: 100%; border-radius: 20px;">

    <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" 
     alt="Foto Profil" 
     class="rounded-circle mx-auto mb-3" 
     width="120" height="120">

        <h3 class="text-success mb-2">Profil Pengguna</h3>
        <p class="text-muted">Berikut informasi akun kamu:</p>

        <table class="table table-bordered mt-3 text-start">
            <tr>
                <th class="bg-light" style="width: 40%;">Nama Pengguna</th>
                <td>{{ $username }}</td>
            </tr>
            <tr>
                <th class="bg-light">Umur</th>
                <td>{{ $umur }} tahun</td>
            </tr>
            <tr>
                <th class="bg-light">Status</th>
                <td>{{ $status }}</td>
            </tr>
            <tr>
                <th class="bg-light">Keterangan</th>
                <td>{{ $aktif }}</td>
            </tr>
        </table>

        <div class="mt-4">
            <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}" class="btn btn-secondary px-4">
    Kembali ke Dashboard
</a>

        </div>
    </div>
</div>
@endsection
