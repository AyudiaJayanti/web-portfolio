<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate;


class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_porto',
        'jenis',
        'link_porto',
        'gambar',
    ];
}
