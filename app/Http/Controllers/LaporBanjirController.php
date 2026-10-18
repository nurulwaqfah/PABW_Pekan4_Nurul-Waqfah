<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function laporan()
    {
        $laporan = Laporan::all();

        return view('laporan', compact('laporan'));
    }

    public function form()
    {
        return view('form');
    }

    public function kirim(Request $request)
    {
        $validated = $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tinggi_genangan' => 'required|integer|min:0',
            'tanggal_kejadian' => 'required|date',
        ]);

        $data = Laporan::create($validated);

        return view('konfirmasi', compact('data'));
    }
}