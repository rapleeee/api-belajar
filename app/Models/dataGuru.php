<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dataGuru extends Model
{
    protected $fillable = [
        'name',
        'age',
        'employee_id',
        'subject',
    ];

    public function dataSiswa()
    {
        return $this->hasMany(dataSiswa::class);
    }
}
