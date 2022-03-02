<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balai extends Model
{
    use HasFactory;
    //deklarasikan table name
    protected $table = 'balais';
    //deklarasikan fillable
    // protected $fillable = ['nama_satker','alamat','kota','tipe_balai'];
    protected $guarded = [];
}
