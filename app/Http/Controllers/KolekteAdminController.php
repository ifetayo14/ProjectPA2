<?php

namespace App\Http\Controllers;

use App\Kolekte;
use Illuminate\Http\Request;

class KolekteAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kolekteGereja = Kolekte::all();
        return view('kolekteMain', compact('kolekteGereja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kolekte  $kolekte
     * @return \Illuminate\Http\Response
     */
    public function show(Kolekte $kolekte)
    {
        return view('detailKolekteGereja', compact('kolekte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kolekte  $kolekte
     * @return \Illuminate\Http\Response
     */
    public function edit(Kolekte $kolekte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kolekte  $kolekte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kolekte $kolekte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kolekte  $kolekte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kolekte $kolekte)
    {
        //
    }
}
