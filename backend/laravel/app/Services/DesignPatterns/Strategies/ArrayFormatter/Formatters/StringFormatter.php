<?php

namespace App\Services\DesignPatterns\Strategies\ArrayFormatter\Formatters;

/**
 * Class StringFormatter
 * @package App\Services\DesignPatterns\Strategies\ArrayFormatter\Formatters
 */
class StringFormatter implements FormatterInterface
{
    const DELIMITER = ',';

    /**
     * @param array $data
     * @return string
     */
    public function format(array $data): string
    {
        return implode(self::DELIMITER, $data);
    }
}
