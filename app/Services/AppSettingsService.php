<?php

namespace App\Services;

use App\Repositories\AppSettingsRepository;
use App\Utils\Response;
use Exception;

class AppSettingsService
{
    public function __construct(
        private AppSettingsRepository $appSettingsRepository,
        private Response $response
    ) {}

    public function createAppSettings(array $inputData)
    {
        try {
            $isAppSettingsExist = $this->appSettingsRepository->exist($inputData['name']);
            if ($isAppSettingsExist) {
                return $this->response->duplicate(['message' => 'App settings already exist']);
            }
            $isAppSettingsCreated = $this->appSettingsRepository->create($inputData);
            if ($isAppSettingsCreated) {
                return $this->response->success(['message' => 'App settings created successfully']);
            }
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }

    public function getAppSettings()
    {
        try {
            $appSettings = $this->appSettingsRepository->all()->pluck('value', 'name')->toArray();
            return $this->response->success(['data' => $appSettings]);
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }
}
