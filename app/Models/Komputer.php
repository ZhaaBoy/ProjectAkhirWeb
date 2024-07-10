<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komputer extends Model
{
    use HasFactory;
    protected $table = 'komputers';
    protected $fillable = ['merk','type','ram','processor','hardisk'];
}


