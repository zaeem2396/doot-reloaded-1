<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    use HasFactory;

    protected $table = 'options';
    protected $fillable = ['id', 'catId', 'subCatId', 'serviceId', 'name', 'img', 'content', 'price', 'created_at', 'updated_at'];
    protected $hidden = ['created_at', 'updated_at'];
}
