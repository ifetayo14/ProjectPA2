<?php

namespace App\Http\Controllers;

use App\JemaatMatio;
use Illuminate\Http\Request;

class JemaatMatioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataJemaat = JemaatMatio::all();
        return view('jemaatMatio', compact('dataJemaat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addJemaatMatio');
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

        $dataJemaat = new JemaatMatio([
            'nama' => $request->get('nama'),
            'gender' => $request->get('gender'),
            'alamat' => $request->get('alamat'),
            'umur' => $request->get('umur'),
        ]);

        $dataJemaat->save();
        return redirect('/jemaatMatio')->with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JemaatMatio  $jemaatMatio
     * @return \Illuminate\Http\Response
     */
    public function show(JemaatMatio $jemaatMatio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JemaatMatio  $jemaatMatio
     * @return \Illuminate\Http\Response
     */
    public function edit(JemaatMatio $jemaatMatio)
    {
        return view('editJemaatMatio', compact('jemaatMatio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JemaatMatio  $jemaatMatio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JemaatMatio $jemaatMatio)
    {
        $this->validate($request, [
            'nama' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
            'umur' => 'required',
        ]);

        $jemaatMatio->update([
            'nama' => $request->nama,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'umur' => $request->umur,
        ]);

        return redirect('/jemaatMatio ')->with('success', 'Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JemaatMatio  $jemaatMatio
     * @return \Illuminate\Http\Response
     */
    public function destroy(JemaatMatio $jemaatMatio)
    {
        JemaatMatio::destroy($jemaatMatio->id);
        return redirect('/jemaatMatios')->with('success', 'Data Dihapus');
    }
}
