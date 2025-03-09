<?php

namespace App\Http\Controllers;

use App\Services\OptionService;
use App\Services\SubCategoryService;
use App\Utils\Response;
use Exception;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function __construct(
        private Response $response,
        private OptionService $optionService,
        private SubCategoryService $subCategoryService
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

    public function showOptions(Request $request)
    {
        try {
            $optionId = $request->query('optionId');
            $catId = $request->query('catId');
            $subCatId = $request->query('subCatId');
            $data['pageTitle'] = 'Homedoot';
            $data['subCategories'] = $this->subCategoryService->getSubCategories()->getData(true);
            $data['serviceName'] = str_replace('-', ' ', $request->query('service_name'));
            $serviceOptionsResponse = $this->optionService->getOptionsOnCatIdSubCatIdOptionId([
                'catId' => $catId,
                'subCatId' => $subCatId,
                'optionId' => $optionId,
            ]);
            $data['serviceOptions'] = json_decode(json_encode($serviceOptionsResponse), true);
            return view('options', $data);
        } catch (Exception $e) {
            return $this->response->error(['message' => $e->getMessage()]);
        }
    }
}
