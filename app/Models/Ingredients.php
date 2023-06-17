<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    public function allergy()
    {
        return $this->belongsTo(Allergy::class, 'ingredientId', 'id');
    }

    use HasFactory;
}
