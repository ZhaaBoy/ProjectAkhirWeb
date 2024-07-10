<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kantin extends Model
{
    use HasFactory;
    protected $table = 'kantins';
    protected $fillable = ['nama_kantin','pemilik','tahun_berdiri','jenis_produk'];


}
