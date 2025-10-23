<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'User');
        return view('dashboard', compact('username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'User');
        $umur = 20;
        $status = 'Mahasiswa';
        $aktif = 'Aktif';

        return view('profile', compact('username', 'umur', 'status', 'aktif'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'User');

        $alat = [
        ['nama' => 'Traktor', 'kategori' => 'Alat Berat', 'stok' => 3],
        ['nama' => 'Cangkul', 'kategori' => 'Alat Tangan', 'stok' => 25],
        ['nama' => 'Pompa Air', 'kategori' => 'Irigasi', 'stok' => 10],
        ['nama' => 'Sprayer', 'kategori' => 'Penyemprotan', 'stok' => 8],
        ['nama' => 'Hand Tractor', 'kategori' => 'Alat Berat', 'stok' => 5],
        ['nama' => 'Alat Penanam Padi', 'kategori' => 'Tanam', 'stok' => 7],
        ['nama' => 'Alat Pemanen Jagung', 'kategori' => 'Panen', 'stok' => 6],
        ['nama' => 'Garu Sisir', 'kategori' => 'Pengolahan Tanah', 'stok' => 12],
        ['nama' => 'Rotary Tiller', 'kategori' => 'Pengolahan Tanah', 'stok' => 4],
        ['nama' => 'Penyemprot Hama Otomatis', 'kategori' => 'Penyemprotan', 'stok' => 9],
        ['nama' => 'Mesin Pemotong Rumput', 'kategori' => 'Perawatan', 'stok' => 15],
        ['nama' => 'Ember Irigasi', 'kategori' => 'Irigasi', 'stok' => 30],
        ['nama' => 'Keranjang Panen', 'kategori' => 'Panen', 'stok' => 20],
        ['nama' => 'Alat Pemupuk', 'kategori' => 'Pemupukan', 'stok' => 10],
        ['nama' => 'Sekop', 'kategori' => 'Alat Tangan', 'stok' => 18],
        ['nama' => 'Parang', 'kategori' => 'Alat Tangan', 'stok' => 22],
        ['nama' => 'Kored', 'kategori' => 'Alat Tangan', 'stok' => 14],
    ];
        return view('pengelolaan', compact('alat', 'username'));
    }
}
