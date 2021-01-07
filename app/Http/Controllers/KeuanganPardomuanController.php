<?php

namespace App\Http\Controllers;

use App\KeuanganPardomuan;
use Illuminate\Http\Request;

class KeuanganPardomuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataKeuangan = KeuanganPardomuan::all();
        return view('keuanganPardomuan', compact('dataKeuangan'));
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

        $dataKeuangan = new KeuanganPardomuan([
            'keterangan' => $request->get('keterangan'),
            'bulan' => $request->get('bulan'),
            'pemasukan' => $request->get('pemasukan'),
            'pengeluaran' => $request->get('pengeluaran'),
        ]);

        $dataKeuangan->save();
        return redirect('/keuanganPardomuan')->with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KeuanganPardomuan  $keuanganPardomuan
     * @return \Illuminate\Http\Response
     */
    public function show(KeuanganPardomuan $keuanganPardomuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KeuanganPardomuan  $keuanganPardomuan
     * @return \Illuminate\Http\Response
     */
    public function edit(KeuanganPardomuan $keuanganPardomuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KeuanganPardomuan  $keuanganPardomuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KeuanganPardomuan $keuanganPardomuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KeuanganPardomuan  $keuanganPardomuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(KeuanganPardomuan $keuanganPardomuan)
    {
        KeuanganPardomuan::destroy($keuanganPardomuan->id);
        return redirect('/keuanganPardomuan ')->with('success', 'Data Dihapus');
    }
}
