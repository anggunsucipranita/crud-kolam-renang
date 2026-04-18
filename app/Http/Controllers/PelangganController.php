<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $data = Pelanggan::all();
        return view('pelanggan.index', compact('data'));
    }

    public function store(Request $request)
    {
        Pelanggan::create($request->all());
        return redirect('/pelanggan'); // FIX
    }

    public function edit($id)
    {
        $edit = Pelanggan::find($id);
        $data = Pelanggan::all();
        return view('pelanggan.index', compact('data', 'edit'));
    }

    public function update(Request $request, $id)
    {
        $data = Pelanggan::find($id);
        $data->update($request->all());
        return redirect('/pelanggan');
    }

    public function destroy($id)
    {
        Pelanggan::destroy($id);
        return redirect('/pelanggan'); // FIX
    }
}