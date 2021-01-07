<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeuanganMatio extends Model
{
    protected $fillable = ['keterangan', 'bulan', 'pemasukan', 'pengeluaran'];

    protected $table = 'keuangan_matios';
}
