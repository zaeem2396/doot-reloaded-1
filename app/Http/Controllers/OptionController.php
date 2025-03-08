<?php

namespace App\Http\Controllers;

use App\Services\OptionService;
use App\Utils\Response;
use Exception;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function __construct(
        private Response $response,
        private OptionService $optionService
    ) {}

    public function get($catId, $subCatId, $serviceId)
    {
        try {
            $inputData = [
                'catId' => $catId,
                'subCatId' => $subCatId,
                'serviceId' => $serviceId,
            ];
            $options = $this->optionService->getOptionsOnCatIdSubCatIdServiceId($inputData);
            return $options;
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }
}
