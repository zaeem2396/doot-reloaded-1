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

    public static function createCategory(array $inputData)
    {
        try {
            $inputData['name'] = str_replace(' ', '-', strtolower($inputData['name']));
            $isCategoryExist = self::where('name', $inputData['name'])->exists();
            if ($isCategoryExist) {
                return app(Response::class)->duplicate(['message' => 'Category already exist']);
            }
            $isCategoryCreated = self::create($inputData);
            if ($isCategoryCreated) {
                return app(Response::class)->success(['message' => 'Category created successfully']);
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public static function getCategories()
    {
        try {
            $categories = self::all();
            return $categories;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
