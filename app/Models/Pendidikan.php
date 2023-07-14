<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_dosen',
        'kategori',
        'pendidikan',
        'gelar',
        'tahun',
        'jenjang',
        'berkas',

    ];
    public $timestamp = true;
}
