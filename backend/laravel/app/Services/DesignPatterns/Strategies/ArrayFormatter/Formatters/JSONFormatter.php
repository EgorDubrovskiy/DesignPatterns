<?php

namespace App\Services\DesignPatterns\Strategies\ArrayFormatter\Formatters;

/**
 * Class JSONFormatter
 * @package App\Services\DesignPatterns\Strategies\ArrayFormatter\Formatters
 */
class JSONFormatter implements FormatterInterface
{
    /**
     * @param array $data
     * @return string
     */
    public function format(array $data): string
    {
        return json_encode($data);
    }
}
