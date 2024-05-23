<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Premium extends Model
{
    protected $table = 'premium'; // jika nama tabel tidak sesuai dengan format Laravel
    protected $fillable = [
        'nama', 'jenis_kelamin', 'umur', 'no_telp', 'email', 'alamat', 'permasalahan'
    ];
}
