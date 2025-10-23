@extends('layouts.app')

@section('content')
<h3>Selamat datang, {{ $username }}!</h3>
<p>Berikut daftar alat pertanian yang tersedia:</p>

<table class="table table-striped mt-3">
    <thead class="table-success">
        <tr>
            <th>No</th>
            <th>Nama Alat</th>
            <th>Kategori</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alat as $index => $a)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $a['nama'] }}</td>
            <td>{{ $a['kategori'] }}</td>
            <td>{{ $a['stok'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('dashboard', ['username' => request()->query('username')]) }}" class="btn btn-secondary mt-3">
    Kembali ke Dashboard
</a>

@endsection
