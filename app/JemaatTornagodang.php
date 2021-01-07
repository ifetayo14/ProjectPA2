<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JemaatTornagodang extends Model
{
    protected $fillable = ['nama', 'gender', 'alamat', 'umur'];

    protected $table = 'jemaat_tornagodangs';
}
