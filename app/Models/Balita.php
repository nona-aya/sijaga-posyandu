<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
    protected $fillable = [
        'nik',
        'nama_balita',
        'jenis_kelamin',
        'tanggal_lahir',
        'nama_ortu',
        'berat_badan',
        'tinggi_badan',
        'alamat'
    ];
}