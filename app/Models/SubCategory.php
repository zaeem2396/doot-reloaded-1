<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $table = 'sub_category';

    protected $fillable = [
        'catId',
        'name',
        'img',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];
}
