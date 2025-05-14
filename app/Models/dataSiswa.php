<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dataSiswa extends Model
{

    protected $fillable = [
        'name',
        'age',
        'grade',
        'nisn',
        'address',
        'phone_number',
    ];
}
