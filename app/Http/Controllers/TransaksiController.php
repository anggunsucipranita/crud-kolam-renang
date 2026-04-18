<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = Transaksi::all();
        return view('transaksi.index', compact('data'));
    }



    public function update(Request $request, Transaksi $transaksi)
    {
    $transaksi->update($request->all());
    return redirect()->back();
    }

    public function store(Request $request)
    {
        Transaksi::create($request->all());
        return redirect()->back();
    }

    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return redirect()->back();
    }
}