<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use App\TataIbadah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPengumuman = Pengumuman::all();
        return view('pengumuman', compact('dataPengumuman'));
    }

    public function indexJemaat()
    {
        $dataPengumuman = Pengumuman::all();
        return view('/pengumumanJemaat', compact('dataPengumuman'));
    }

    public function indexGereja()
    {
        $dataPengumuman = Pengumuman::all();
        $dataTataIbadah = TataIbadah::all();
        return view('/gerejaPage', ['dataPengumuman' => $dataPengumuman, 'dataTataIbadah' => $dataTataIbadah]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addPengumuman');
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
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $dataPengumuman = new Pengumuman([
            'judul' => $request->get('judul'),
            'isi' => $request->get('isi')
        ]);

        $dataPengumuman->save();
        return redirect('/pengumuman')->with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {
        return view('detailPengumuman', compact('pengumuman'));
    }

    public function showJemaat(Pengumuman $pengumuman)
    {
        return view('detailPengumumanJemaat', compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        Pengumuman::destroy($pengumuman->id);
        return redirect('/pengumuman ')->with('success', 'Data Dihapus');
    }
}
