<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    protected $fillable = ['buku_id', 'harga'];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }

    
}
