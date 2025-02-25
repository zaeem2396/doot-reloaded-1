<?php

namespace App\Models;

use App\Utils\Response;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $fillable = [
        'name',
        'img',
        'tagLine',
        'seoTitle',
        'seoDecription',
        'seoKeywords'
    ];
}
