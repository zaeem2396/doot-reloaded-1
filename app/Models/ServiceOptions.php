<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOptions extends Model
{
    use HasFactory;

    protected $table = 'serviceOptions';
    protected $fillable = ['id', 'catId', 'subCatId', 'optionId', 'options', 'price', 'included', 'excluded', 'provideByCustomer', 'created_at', 'updated_at'];
    protected $hidden = ['created_at', 'updated_at'];
}
