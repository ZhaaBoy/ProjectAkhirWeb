<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesawat extends Model
{
    use HasFactory;
    protected $table = 'pesawats';
    protected $fillable = ['kode_pesawat','nama_pesawat','type','tahun_rakit'];
}
