<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JemaatSibosur extends Model
{
    protected $fillable = ['nama', 'gender', 'alamat', 'umur'];

    protected $table = 'jemaat_sibosurs';
}
