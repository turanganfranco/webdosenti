<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password',
        'nama',
        'nip',
        'tempat_tanggal_lahir',
        'jenis_kelamin',
        'pendidikan_tertinggi',
        'pangkat',
        'golongan',
        'jabatan',
        'foto',

    ];
    public $timestamp = true;
}
