<?php

if (!function_exists('getAppSettings')) {
    function getAppSettings()
    {
        $appSettings = app(\App\Services\AppSettingsService::class)->getAppSettings();
        return json_decode(json_encode($appSettings), true);
    }
}
