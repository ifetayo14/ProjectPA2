<?php

namespace App\Http\Controllers;

use App\JemaatSibosur;
use Illuminate\Http\Request;

class JemaatSibosurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataJemaat = JemaatSibosur::all();
        return view('jemaatSibosur', compact('dataJemaat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addJemaatSibosur');
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

        $dataJemaat = new JemaatSibosur([
            'nama' => $request->get('nama'),
            'gender' => $request->get('gender'),
            'alamat' => $request->get('alamat'),
            'umur' => $request->get('umur'),
        ]);

        $dataJemaat->save();
        return redirect('/jemaatSibosur')->with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JemaatSibosur  $jemaatSibosur
     * @return \Illuminate\Http\Response
     */
    public function show(JemaatSibosur $jemaatSibosur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JemaatSibosur  $jemaatSibosur
     * @return \Illuminate\Http\Response
     */
    public function edit(JemaatSibosur $jemaatSibosur)
    {
        return view('editJemaatSibosur', compact('jemaatSibosur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JemaatSibosur  $jemaatSibosur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JemaatSibosur $jemaatSibosur)
    {
        $this->validate($request, [
            'nama' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
            'umur' => 'required',
        ]);

        $jemaatSibosur->update([
            'nama' => $request->nama,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'umur' => $request->umur,
        ]);

        return redirect('/jemaatSibosur ')->with('success', 'Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JemaatSibosur  $jemaatSibosur
     * @return \Illuminate\Http\Response
     */
    public function destroy(JemaatSibosur $jemaatSibosur)
    {
        JemaatSibosur::destroy($jemaatSibosur->id);
        return redirect('/jemaatSibosur')->with('success', 'Data Dihapus');
    }
}
