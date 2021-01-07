<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JemaatPardomuan extends Model
{
    protected $fillable = ['nama', 'gender', 'alamat', 'umur'];

    protected $table = 'jemaat_pardomuans';
}
