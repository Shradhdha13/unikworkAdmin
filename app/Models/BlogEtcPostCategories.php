<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogEtcPostCategories extends Model
{
    use HasFactory;
 
    protected $table = 'blog_etc_post_categories';

    public function getCategory()
    {
        return $this->belongsTo('App/Models/BlogEtcCategories', 'id', 'blog_etc_category_id');
    }
}
