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

    public static function createAppSettings($inputData)
    {
        try {
            $isAppSettingsExist = self::where('name', $inputData['name'])->exist();
            if ($isAppSettingsExist) {
                return app(Response::class)->duplicate(['message' => 'App settings already exist']);
            }
            $isAppSettingsCreated = self::create($inputData);
            if ($isAppSettingsCreated) {
                return app(Response::class)->success(['message' => 'App settings created successfully']);
            }
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }

    public static function getSettings()
    {
        try {
            $settings = self::pluck('value', 'name')->toArray();
            return app(Response::class)->success(['data' => $settings]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
