<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengabdian extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_dosen',
        'perihal',
        'berkas',

    ];
    public $timestamp = true;
}
