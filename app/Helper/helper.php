<?php

use App\Models\Blog;
use App\Models\seo;

function metaBlog($id)
{
    $data = Blog::where('id', $id)->first();
    return $data;
}

function seoPage($pagename)
{
    $pagename = seo::where('page_name', $pagename)->first();
    return $pagename;
}
// function seoTitle($title)
// {
//     $title = seo::where('title', $title)->first();
//     return $title;
// }
// function seoDesc($description)
// {
//     $description = seo::where('description', $description)->first();
//     return $description;
// }
// function seoKeyword($seokeyword)
// {
//     $keyword = seo::where('key_word', $seokeyword)->first();
//     return $keyword;
// }