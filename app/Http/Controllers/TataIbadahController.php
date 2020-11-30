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

    public function indexList()
    {
        $tataIbadah = TataIbadah::all();
        return view('tataIbadahList', compact('tataIbadah'));
    }

    public function indexListPersonalia()
    {
        $tataIbadah = TataIbadah::all();
        return view('tataIbadahPersonalia', compact('tataIbadah'));
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

    public function createPersonalia()
    {
        return view('addTataIbadahPersonalia');
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

    public function storePersonalia(Request $request)
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
        return redirect('/tataIbadahPersonalia')->with('success', 'Data Ditambah');
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

    public function showJemaat(TataIbadah $tataIbadah)
    {
        return view('detailTataIbadahJemaat', compact('tataIbadah'));
    }

    public function showPersonalia(TataIbadah $tataIbadah)
    {
        return view('detailTataIbadahPersonalia', compact('tataIbadah'));
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

    public function destroyPersonalia(TataIbadah $tataIbadah)
    {
        TataIbadah::destroy($tataIbadah->id);
        return redirect('/tataIbadahPersonalia ')->with('success', 'Data Dihapus');
    }
}
