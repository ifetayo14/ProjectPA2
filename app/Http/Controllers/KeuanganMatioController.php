<?php

namespace App\Http\Controllers;

use App\KeuanganMatio;
use Illuminate\Http\Request;

class KeuanganMatioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataKeuangan = KeuanganMatio::all();
        return view('keuanganMatio', compact('dataKeuangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addKeuanganMatio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'keterangan' => 'required',
            'bulan' => 'required',
        ]);

        $dataKeuangan = new KeuanganMatio([
            'keterangan' => $request->get('keterangan'),
            'bulan' => $request->get('bulan'),
            'pemasukan' => $request->get('pemasukan'),
            'pengeluaran' => $request->get('pengeluaran'),
        ]);

        $dataKeuangan->save();
        return redirect('/keuanganMatio')->with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KeuanganMatio  $keuanganMatio
     * @return \Illuminate\Http\Response
     */
    public function show(KeuanganMatio $keuanganMatio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KeuanganMatio  $keuanganMatio
     * @return \Illuminate\Http\Response
     */
    public function edit(KeuanganMatio $keuanganMatio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KeuanganMatio  $keuanganMatio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KeuanganMatio $keuanganMatio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KeuanganMatio  $keuanganMatio
     * @return \Illuminate\Http\Response
     */
    public function destroy(KeuanganMatio $keuanganMatio)
    {
        KeuanganMatio::destroy($keuanganMatio->id);
        return redirect('/keuanganMatio ')->with('success', 'Data Dihapus');
    }
}
