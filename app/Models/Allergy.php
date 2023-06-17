<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{

    public function ingredients()
    {
        return $this->hasMany(Ingredients::class, 'ingredientId', 'id');
    }

    use HasFactory;
}
