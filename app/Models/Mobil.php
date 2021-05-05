<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_Registrasi', 'Jenis', 'Merek', 'Plat_Nomor', 'Pemilik', 'stnk', 'keluhan'   
    ];
}
