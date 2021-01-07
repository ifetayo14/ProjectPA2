<?php

namespace App\Http\Controllers;

use App\KeuanganSibosur;
use Illuminate\Http\Request;

class KeuanganSibosurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataKeuangan = KeuanganSibosur::all();
        return view('keuanganSibosur', compact('dataKeuangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addKeuanganSibosur');
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

        $dataKeuangan = new KeuanganSibosur([
            'keterangan' => $request->get('keterangan'),
            'bulan' => $request->get('bulan'),
            'pemasukan' => $request->get('pemasukan'),
            'pengeluaran' => $request->get('pengeluaran'),
        ]);

        $dataKeuangan->save();
        return redirect('/keuanganSibosur')->with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KeuanganSibosur  $keuanganSibosur
     * @return \Illuminate\Http\Response
     */
    public function show(KeuanganSibosur $keuanganSibosur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KeuanganSibosur  $keuanganSibosur
     * @return \Illuminate\Http\Response
     */
    public function edit(KeuanganSibosur $keuanganSibosur)
    {
//        return view('editKeuanganSibosur', compact('keuanganSibosur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KeuanganSibosur  $keuanganSibosur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KeuanganSibosur $keuanganSibosur)
    {
//        $this->validate($request, [
//            'keterangan' => 'required',
//            'bulan' => 'required',
//        ]);
//
//        $keuanganSibosur->update([
//            'keterangan' => $request->keterangan,
//            'bulan' => $request->bulan,
//            'pemasukan' => $request->pemasukan,
//            'pengeluaran' => $request->pengeluaran,
//        ]);
//
//        return redirect('/keuanganSibosur ')->with('success', 'Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KeuanganSibosur  $keuanganSibosur
     * @return \Illuminate\Http\Response
     */
    public function destroy(KeuanganSibosur $keuanganSibosur)
    {
        KeuanganSibosur::destroy($keuanganSibosur->id);
        return redirect('/keuanganSibosur ')->with('success', 'Data Dihapus');
    }
}
