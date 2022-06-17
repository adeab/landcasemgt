<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandCase extends Model
{
    use HasFactory;

    protected $table = 'land_cases';
    protected $fillable = ['title','number','description','fiscal_year','next_date','case_status_id','case_type_id'];

    public function people(){
        return $this->hasMany(People::class);
    }
    public function type(){
        return $this->belongsTo(CaseType::class, 'case_type_id');
    }
    public function status(){
        return $this->belongsTo(CaseStatus::class, 'case_status_id');
    }

}
