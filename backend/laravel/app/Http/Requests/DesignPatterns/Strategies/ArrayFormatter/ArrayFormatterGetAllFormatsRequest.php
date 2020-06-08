<?php

namespace App\Http\Requests\DesignPatterns\Strategies\ArrayFormatter;

use App\Http\Requests\BaseRequest;

/**
 * Class ArrayFormatterGetAllFormatsRequest
 * @package App\Http\Requests\DesignPatterns\Strategies\ArrayFormatter
 */
class ArrayFormatterGetAllFormatsRequest extends BaseRequest
{
    /**
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'array' => 'array',
        ];
    }
}
