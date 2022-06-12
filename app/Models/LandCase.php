<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandCase extends Model
{
    use HasFactory;

    public function people(){
        return $this->hasMany(People::class);
    }
}
