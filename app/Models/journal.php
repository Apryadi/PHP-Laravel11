<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class journal extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'isbn',
        'tahun-terbit',
        'penerbit',
        'penulis',
    ];
}