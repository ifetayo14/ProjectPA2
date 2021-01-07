<?php

namespace App\Http\Controllers;

use App\JemaatPardomuan;
use Illuminate\Http\Request;

class JemaatPardomuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataJemaat = JemaatPardomuan::all();
        return view('jemaatPardomuan', compact('dataJemaat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addJemaatPardomuan');
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

        $dataJemaat = new JemaatPardomuan([
            'nama' => $request->get('nama'),
            'gender' => $request->get('gender'),
            'alamat' => $request->get('alamat'),
            'umur' => $request->get('umur'),
        ]);

        $dataJemaat->save();
        return redirect('/jemaatPardomuan')->with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JemaatPardomuan  $jemaatPardomuan
     * @return \Illuminate\Http\Response
     */
    public function show(JemaatPardomuan $jemaatPardomuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JemaatPardomuan  $jemaatPardomuan
     * @return \Illuminate\Http\Response
     */
    public function edit(JemaatPardomuan $jemaatPardomuan)
    {
        return view('editJemaatPardomuan', compact('jemaatPardomuan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JemaatPardomuan  $jemaatPardomuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JemaatPardomuan $jemaatPardomuan)
    {
        $this->validate($request, [
            'nama' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
            'umur' => 'required',
        ]);

        $jemaatPardomuan->update([
            'nama' => $request->nama,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'umur' => $request->umur,
        ]);

        return redirect('/jemaatPardomuan ')->with('success', 'Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JemaatPardomuan  $jemaatPardomuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(JemaatPardomuan $jemaatPardomuan)
    {
        JemaatPardomuan::destroy($jemaatPardomuan->id);
        return redirect('/jemaatPardomuan')->with('success', 'Data Dihapus');
    }
}
