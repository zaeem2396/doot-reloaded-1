<?php

namespace App\Services;

use App\Repositories\OptionServiceRepository;
use App\Utils\Response;
use Exception;

class OptionService
{
    public function __construct(
        private OptionServiceRepository $optionServiceRepository,
        private Response $response
    ) {}

    public function createOption(array $inputData)
    {
        try {
            $inputData['name'] = str_replace(' ', '-', strtolower($inputData['name']));
            $isOptionExist = $this->optionServiceRepository->exist($inputData['name']);
            if ($isOptionExist) {
                return $this->response->duplicate(['message' => 'Option already exist']);
            }
            $isOptionCreated = $this->optionServiceRepository->create($inputData);
            if ($isOptionCreated) {
                return $this->response->success(['message' => 'Option created successfully']);
            }
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }

    public function getOptionsOnCatIdSubCatIdServiceId(array $inputData)
    {
        try {
            if (!isset($inputData['catId'], $inputData['subCatId'], $inputData['serviceId'])) {
                return $this->response->error(['message' => 'Invalid input data']);
            }
            $options = $this->optionServiceRepository->getOptionsOnCatIdSubCatIdServiceId($inputData);
            return $this->response->success(['data' => $options]);
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }
}
