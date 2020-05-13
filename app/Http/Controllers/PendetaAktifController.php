<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PendetaAktif;

class PendetaAktifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPendeta = PendetaAktif::all();
        return view('pendetaAktif', compact('dataPendeta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addPendetaAktif');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'birthPlace' => 'required',
            'birthDate' => 'required',
            'gender' => 'required',
            'dutyBegin' => 'required',
            'workPlace' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required'
        ]);
        $pendetaAktif = new PendetaAktif([
            'name' => $request->get('name'),
            'birthPlace' => $request->get('birthPlace'),
            'birthDate' => $request->get('birthDate'),
            'gender' => $request->get('gender'),
            'dutyBegin' => $request->get('dutyBegin'),
            'workPlace' => $request->get('workPlace'),
            'address' => $request->get('address'),
            'email' => $request->get('email'),
            'phoneNumber' => $request->get('phoneNumber')
        ]);
        $pendetaAktif->save();
        return redirect('/pendetaAktif')->with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
