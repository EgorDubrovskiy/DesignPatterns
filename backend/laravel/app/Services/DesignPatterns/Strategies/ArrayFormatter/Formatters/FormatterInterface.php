<?php

namespace App\Services\DesignPatterns\Strategies\ArrayFormatter\Formatters;

/**
 * Interface FormatterInterface
 * @package App\Services\DesignPatterns\Strategies\ArrayFormatter\Formatters
 */
interface FormatterInterface
{
    /**
     * @param array $data
     * @return string
     */
    public function format(array $data): string;
}
