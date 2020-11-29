<?php

namespace App\Http\Controllers;

use App\TataIbadah;
use Illuminate\Http\Request;

class TataIbadahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tataIbadah = TataIbadah::all();
        return view('tataIbadah', compact('tataIbadah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addTataIbadah');
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

        $tataIbadah = new TataIbadah([
            'judul' => $request->get('judul'),
            'isi' => $request->get('isi')
        ]);

        $tataIbadah->save();
        return redirect('/tataIbadah')->with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TataIbadah  $tataIbadah
     * @return \Illuminate\Http\Response
     */
    public function show(TataIbadah $tataIbadah)
    {
        return view('detailTataIbadah', compact('tataIbadah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TataIbadah  $tataIbadah
     * @return \Illuminate\Http\Response
     */
    public function edit(TataIbadah $tataIbadah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TataIbadah  $tataIbadah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TataIbadah $tataIbadah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TataIbadah  $tataIbadah
     * @return \Illuminate\Http\Response
     */
    public function destroy(TataIbadah $tataIbadah)
    {
        TataIbadah::destroy($tataIbadah->id);
        return redirect('/tataIbadah ')->with('success', 'Data Dihapus');
    }
}
