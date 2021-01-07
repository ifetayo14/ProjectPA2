<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeuanganSibosur extends Model
{
    protected $fillable = ['keterangan', 'bulan', 'pemasukan', 'pengeluaran'];

    protected $table = 'keuangan_sibosurs';
}
