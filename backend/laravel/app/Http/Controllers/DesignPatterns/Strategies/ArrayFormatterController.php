<?php

namespace App\Http\Controllers\DesignPatterns\Strategies;

use App\Http\Controllers\Controller;
use App\Http\Requests\DesignPatterns\Strategies\ArrayFormatter\ArrayFormatterGetAllFormatsRequest;
use App\Services\DesignPatterns\Strategies\ArrayFormatter\ArrayFormatter;
use App\Services\DesignPatterns\Strategies\ArrayFormatter\Formatters\HtmlFormatter;
use App\Services\DesignPatterns\Strategies\ArrayFormatter\Formatters\JSONFormatter;
use Illuminate\Http\JsonResponse;

/**
 * Class ArrayFormatterController
 * @package App\Http\Controllers\DesignPatterns\Strategies
 */
class ArrayFormatterController extends Controller
{
    /**
     * @param ArrayFormatterGetAllFormatsRequest $request
     * @return JsonResponse
     */
    public function getAllFormats(ArrayFormatterGetAllFormatsRequest $request): JsonResponse
    {
        $result = [];
        $arrayToFormat = $request->get('array', ['Hello', 'World']);

        $arrayFormatter = new ArrayFormatter(ArrayFormatter::STRING_FORMAT);
        $result['string'] = $arrayFormatter->format($arrayToFormat);

        $arrayFormatter->setFormatter(new JSONFormatter());
        $result['json'] = $arrayFormatter->format($arrayToFormat);

        $arrayFormatter->setFormatter(new HtmlFormatter());
        $result['html'] = $arrayFormatter->format($arrayToFormat);

        return new JsonResponse($result);
    }
}
