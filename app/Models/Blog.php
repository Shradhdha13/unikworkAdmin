<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $table = "blog";

    public function users()
    {
        return $this->belongsTo(User::class, 'auth_id');
    }
    public function category()
    {
        return $this->belongsTo(category::class, 'category_id');
    }
}