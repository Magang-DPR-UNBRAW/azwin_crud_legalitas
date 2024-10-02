<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    // Tentukan kolom yang bisa diisi
    protected $fillable = ['nama', 'nim', 'jurusan', 'email'];
}