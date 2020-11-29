<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['judul', 'link', 'ringkasan', 'image'];

    protected $table = 'artikel';
}
