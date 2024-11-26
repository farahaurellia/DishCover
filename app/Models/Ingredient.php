<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = [
        'recipe_id',
        'nama_bahan',
        'jumlah',
        'satuan',
    ];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}