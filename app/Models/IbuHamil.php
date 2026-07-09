<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IbuHamil extends Model
{
    protected $fillable = [
        'nik',
        'nama_ibu',
        'tanggal_lahir',
        'usia_kehamilan',
        'hpht',
        'berat_badan',
        'tinggi_badan',
        'alamat',
        'keterangan'
    ];
}