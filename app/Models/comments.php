<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    public $table = "comments";
    use HasFactory;

    public function blogs()
    {
        return $this->belongsTo(Blog::class, 'id');
    }
}
