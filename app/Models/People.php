<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $table = 'people';
    protected $fillable = ['name','address','mobile','email','involvedAs','land_case_id','guardian'];

    public function landcase(){
        return $this->belongsTo(LandCase::class);
    }
}
