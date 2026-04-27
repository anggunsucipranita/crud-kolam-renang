<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $data = Pelanggan::all();
        return view('pelanggan.index', compact('data'));
    }

    public function store(Request $request)
    {
        $harga = $request->jenis_tiket == 'Anak' ? 10000 : 15000;
        $total = $request->jumlah_orang * $harga;

        Pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'jenis_tiket' => $request->jenis_tiket,
            'tanggal_masuk' => $request->tanggal_masuk,
            'jumlah_orang' => $request->jumlah_orang,
            'total_bayar' => $total
        ]);

        return redirect('/pelanggan');
    }

    public function edit($id)
    {
        $edit = Pelanggan::findOrFail($id);
        $data = Pelanggan::all();

        return view('pelanggan.index', compact('edit', 'data'));
    }

    public function update(Request $request, $id)
    {
        $data = Pelanggan::findOrFail($id);

        $harga = $request->jenis_tiket == 'Anak' ? 10000 : 15000;
        $total = $request->jumlah_orang * $harga;

        $data->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'jenis_tiket' => $request->jenis_tiket,
            'tanggal_masuk' => $request->tanggal_masuk,
            'jumlah_orang' => $request->jumlah_orang,
            'total_bayar' => $total
        ]);

        return redirect('/pelanggan');
    }

    public function destroy($id)
    {
        $data = Pelanggan::findOrFail($id);
        $data->delete();

        return redirect('/pelanggan');
    }
}