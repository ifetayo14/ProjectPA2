<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Image;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataArtikel = Artikel::all();
        return view('artikelList', compact('dataArtikel'));
    }

    public function indexPersonalia()
    {
        $dataArtikel = Artikel::all();
        return view('artikelListPersonalia', compact('dataArtikel'));
    }

    public function indexJemaat()
    {
        $dataArtikel = Artikel::all();
        return view('artikel', compact('dataArtikel'));
    }

    public function indexJemaatHome()
    {
        $dataArtikel = Artikel::all();
        return view('mainPage', compact('dataArtikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addArtikel');
    }

    public function createPersonalia()
    {
        return view('addArtikelPersonalia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artikel = new Artikel();
        $artikel->judul = $request->input('judul');
        $artikel->link = $request->input('link');
        $artikel->ringkasan = $request->input('ringkasan');

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // ngambil extension foto
        $filename = time() . '.' . $extension;
        $file -> move('uploads/artikel/', $filename);
        $artikel -> image = $filename;

        $artikel -> save();

        return redirect('/artikelList')->with('success', 'Data Ditambah');
    }

    public function storePersonalia(Request $request)
    {
        $artikel = new Artikel();
        $artikel->judul = $request->input('judul');
        $artikel->link = $request->input('link');
        $artikel->ringkasan = $request->input('ringkasan');

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // ngambil extension foto
        $filename = time() . '.' . $extension;
        $file -> move('uploads/artikel/', $filename);
        $artikel -> image = $filename;

        $artikel -> save();

        return redirect('/artikelListPersonalia')->with('success', 'Data Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        //
    }
}
