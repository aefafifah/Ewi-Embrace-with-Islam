<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Checklist extends Model
{

        protected $table = 'checklists'; // Nama tabel dalam database
        protected $fillable = ['item', 'checked']; // Kolom-kolom yang dapat diisi
    }

