<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerseProgress extends Model
{
    use HasFactory;

    // Specify the table name if it's different from the plural form of the model name
    // protected $table = 'verse_progress';

    // Specify the fillable fields to allow mass assignment
    protected $fillable = [
        'day_number',
        'hafalan_ayat',
        'is_finished',
    ];

    // Cast attributes to specific types
    // protected $casts = [
    //     'is_finished' => 'boolean',
    // ];
}
