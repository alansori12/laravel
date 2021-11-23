<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenModel extends Model
{
    protected $table = "dosen";
    protected $primarikey ="id";
    protected $fillable = [
        'nip','nama','telp','email'
    ];
}
