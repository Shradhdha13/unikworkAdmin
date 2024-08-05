<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    use HasFactory;
    
    public function requirementDetail(){
        return $this->belongsTo('App\Models\Requirements','requirement_id');
    }
}
