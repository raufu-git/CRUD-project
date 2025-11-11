<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{

    protected $fillable = ['name'];

    public function bukus()
    {
        return $this->hasMany(Buku::class, 'kategori_id');
    }
}
