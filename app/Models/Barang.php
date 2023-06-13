<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $fillable = ['id_kampus', 'kode_kampus', 'nama_kampus', 'progam_studi', 'Kejuruan'];
}
