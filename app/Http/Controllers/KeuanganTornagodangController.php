<?php

namespace App\Http\Controllers;

use App\KeuanganTornagodang;
use Illuminate\Http\Request;

class KeuanganTornagodangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataKeuangan = KeuanganTornagodang::all();
        return view('keuanganTornagodang', compact('dataKeuangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addKeuanganTornagodang');
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

        $dataKeuangan = new KeuanganTornagodang([
            'keterangan' => $request->get('keterangan'),
            'bulan' => $request->get('bulan'),
            'pemasukan' => $request->get('pemasukan'),
            'pengeluaran' => $request->get('pengeluaran'),
        ]);

        $dataKeuangan->save();
        return redirect('/keuanganTornagodang')->with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KeuanganTornagodang  $keuanganTornagodang
     * @return \Illuminate\Http\Response
     */
    public function show(KeuanganTornagodang $keuanganTornagodang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KeuanganTornagodang  $keuanganTornagodang
     * @return \Illuminate\Http\Response
     */
    public function edit(KeuanganTornagodang $keuanganTornagodang)
    {
        return view('editKeuanganTornagodang', compact('keuanganTornagodang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KeuanganTornagodang  $keuanganTornagodang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KeuanganTornagodang $keuanganTornagodang)
    {
        $this->validate($request, [
            'keterangan' => 'required',
            'bulan' => 'required',
        ]);

        $keuanganTornagodang->update([
            'keterangan' => $request->keterangan,
            'bulan' => $request->bulan,
            'pemasukan' => $request->pemasukan,
            'pengeluaran' => $request->pengeluaran,
        ]);

        return redirect('/keuanganTornagodang ')->with('success', 'Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KeuanganTornagodang  $keuanganTornagodang
     * @return \Illuminate\Http\Response
     */
    public function destroy(KeuanganTornagodang $keuanganTornagodang)
    {
        KeuanganTornagodang::destroy($keuanganTornagodang->id);
        return redirect('/keuanganTornagodang ')->with('success', 'Data Dihapus');
    }
}
