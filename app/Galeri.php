<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table ='Galeri';

    protected $fillable = ['judul','isi','users_id'];
}