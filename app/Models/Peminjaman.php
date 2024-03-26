<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'userid',
        'bukuid',
        'tanggalpeminjaman',
        'tanggalpengembalian',
        'statuspeminjaman'
    ];
}
