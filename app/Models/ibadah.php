<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ibadah extends Model
{
    protected $table = 'ibadah';

    protected $fillable = [
        'nama_ibadah',
        'jenis_ibadah',
        'waktu',
    ];
}
