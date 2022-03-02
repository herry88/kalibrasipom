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
    // protected $fillable = ['nama_satker','alamat','kota','tipe_id'];
    protected $guarded = [];

    //relation to tipebalai
    /**
     * Get the tipebalai that owns the Balai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipebalai()
    {
        return $this->belongsTo(TipeBalai::class, 'tipe_id');
    }
}
