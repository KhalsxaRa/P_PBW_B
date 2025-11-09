<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesanTamu;

class PesanTamuController extends Controller
{
    // Menampilkan form dan daftar pesan
    public function index()
    {
        $daftar_pesan = PesanTamu::latest()->get();
        return view('bukutamu.index', ['daftar_pesan' => $daftar_pesan]);
    }

    // Menyimpan pesan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);
        
        PesanTamu::create($validated);
        return redirect('/bukutamu')->with('success', 'Pesan Anda telah terkirim!');
    }
}