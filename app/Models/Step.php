<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    protected $fillable = [
        'recipe_id',
        'nomor_urut',
        'deskripsi_langkah',
    ];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
