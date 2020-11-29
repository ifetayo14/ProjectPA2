<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TataIbadah extends Model
{

    protected $fillable = ['judul', 'isi'];

    protected $table = 'tata_ibadahs';
}
