<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function indexAdmin(){
        $dataPengumuman = Pengumuman::all();
        return view('indexAdministrator', compact('dataPengumuman'));
    }

    public function indexPersonalia(){
        $dataPengumuman = Pengumuman::all();
        return view('personalia.indexPersonalia', compact('pengumuman'));
    }

    public function indexPendeta(){
        $dataPengumuman = Pengumuman::all();
        return view('pendeta.indexPendeta', compact('pengumuman'));
    }
}
