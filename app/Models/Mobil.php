<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class mobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_Registrasi', 'Jenis', 'Merek', 'Plat_Nomor', 'Pemilik', 'stnk', 'keluhan'   
    ];

     public static function getId()
    {
        return $getId = DB::table('mobils')->orderBy('id','DESC')->take(1)->get();
    }
}
