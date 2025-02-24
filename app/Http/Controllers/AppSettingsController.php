<?php

namespace App\Http\Controllers;

use App\Models\AppSettings;
use App\Utils\Response;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AppSettingsController extends Controller
{
    public function __construct(
        private Response $response,
        private AppSettings $appSettings
    ) {}

    public function create(Request $request)
    {
        echo "in";exit;
        try {
            $inputData = $request->only('name', 'value');
            $validator = Validator::make($inputData, [
                'name' => 'required|string',
                'value' => 'required|string',
            ]);
            if ($validator->fails()) {
                return $this->response->error(['message' => $validator->errors()->first()]);
            }
            $appSettingsResponse = $this->appSettings->createAppSettings($inputData);
            return $appSettingsResponse;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function get()
    {
        try {
            $appSettingsResponse = $this->appSettings->getSettings();
            return $appSettingsResponse;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
