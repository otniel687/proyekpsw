<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class customer extends Model
{
    use HasFactory;

    protected $table = 'customers',
    $fillable = [
        'ID_customer', 'Nama', 'Alamat', 'NoTelp'      
    ];
    // public static function getId()
    // {
    //     return $getId = DB::table('customers')->orderBy('id')->take(1)->get(); 
        
    // }
}
