<?php

namespace App\Http\Controllers;

use App\JemaatTornagodang;
use Illuminate\Http\Request;

class JemaatTornagodangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataJemaat = JemaatTornagodang::all();
        return view('jemaatTornagodang', compact('dataJemaat'));
    }

    public function indexPersonalia()
    {
        $dataJemaat = JemaatTornagodang::all();
        return view('jemaatTornagodangPersonalia', compact('dataJemaat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addJemaatTornagodang');
    }

    public function createPersonalia()
    {
        return view('addJemaatTornagodangPersonalia');
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
            'nama' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
            'umur' => 'required',
        ]);

        $dataJemaat = new JemaatTornagodang([
            'nama' => $request->get('nama'),
            'gender' => $request->get('gender'),
            'alamat' => $request->get('alamat'),
            'umur' => $request->get('umur'),
        ]);

        $dataJemaat->save();
        return redirect('/jemaatTornagodang')->with('success', 'Data Ditambah');
    }

    public function storePersonalia(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
            'umur' => 'required',
        ]);

        $dataJemaat = new JemaatTornagodang([
            'nama' => $request->get('nama'),
            'gender' => $request->get('gender'),
            'alamat' => $request->get('alamat'),
            'umur' => $request->get('umur'),
        ]);

        $dataJemaat->save();
        return redirect('/jemaatTornagodangPersonalia')->with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JemaatTornagodang  $jemaatTornagodang
     * @return \Illuminate\Http\Response
     */
    public function show(JemaatTornagodang $jemaatTornagodang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JemaatTornagodang  $jemaatTornagodang
     * @return \Illuminate\Http\Response
     */
    public function edit(JemaatTornagodang $jemaatTornagodang)
    {
        return view('editJemaatTornagodang', compact('jemaatTornagodang'));
    }

    public function editPersonalia(JemaatTornagodang $jemaatTornagodangPersonalia)
    {
        return view('editJemaatTornagodangPersonalia', compact('jemaatTornagodangPersonalia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JemaatTornagodang  $jemaatTornagodang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JemaatTornagodang $jemaatTornagodang)
    {
        $this->validate($request, [
            'nama' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
            'umur' => 'required',
        ]);

        $jemaatTornagodang->update([
            'nama' => $request->nama,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'umur' => $request->umur,
        ]);

        return redirect('/jemaatTornagodang ')->with('success', 'Data Diubah');
    }

    public function updatePersonalia(Request $request, JemaatTornagodang $jemaatTornagodangPersonalia)
    {
        $this->validate($request, [
            'nama' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
            'umur' => 'required',
        ]);

        $jemaatTornagodangPersonalia->update([
            'nama' => $request->nama,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'umur' => $request->umur,
        ]);

        return redirect('/jemaatTornagodangPersonalia')->with('success', 'Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JemaatTornagodang  $jemaatTornagodang
     * @return \Illuminate\Http\Response
     */
    public function destroy(JemaatTornagodang $jemaatTornagodang)
    {
        JemaatTornagodang::destroy($jemaatTornagodang->id);
        return redirect('/jemaatTornagodang ')->with('success', 'Data Dihapus');
    }

    public function destroyPersonalia(JemaatTornagodang $jemaatTornagodangPersonalia)
    {
        JemaatTornagodang::destroy($jemaatTornagodangPersonalia->id);
        return redirect('/jemaatTornagodangPersonalia')->with('success', 'Data Dihapus');
    }
}
