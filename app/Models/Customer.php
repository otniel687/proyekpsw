<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class customer extends Model
{
    use HasFactory;

    protected $fillable = [
          'id','ID_customer', 'Nama', 'Alamat', 'NoTelp'      
    ];
 
    public static function getId()
    {
        return $getId = DB::table('customers')->orderBy('id','DESC')->take(1)->get();
    }
}
