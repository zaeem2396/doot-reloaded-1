<?php

namespace App\Models;

use App\Utils\Response;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppSettings extends Model
{
    use HasFactory;

    protected $table = 'appSettings';
    protected $fillable = [
        'name',
        'value',
    ];
}
