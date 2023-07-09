<?php

namespace App\Http\Controllers;

use App\Models\obat;
use Illuminate\Http\Request;

class ObatController extends Controller
    {
public function store(Request $request)
{
    // Validasi data input
    $request->validate([

        'nama' => 'required|string|max:255', 
        'kategoriobat' => 'required|string|max:255', 
        'harga_obat' => 'required|integer|min:0',
        'stock' => 'required|integer|min:0', 
        'tanggal_kadaluarsa' => 'required|date' 
    ]);

    // Simpan data ke dalam database
    $medicine = new obat();
    $medicine->nama = $request->input('nama');
    $medicine->kategoriobat = $request->input('kategoriobat');
    $medicine->harga_obat = $request->input('harga_obat');
    $medicine->stock = $request->input('stock');
    $medicine->tanggal_kadaluarsa = $request->input('tanggal_kadaluarsa');
    $medicine->save();

    // Berikan respon atau redirect ke halaman yang diinginkan
    return redirect('/obats')->with('success', 'Data obat berhasil disimpan.');
}
}