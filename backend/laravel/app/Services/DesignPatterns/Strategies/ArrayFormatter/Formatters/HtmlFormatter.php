<?php

namespace App\Services\DesignPatterns\Strategies\ArrayFormatter\Formatters;

/**
 * Class HtmlFormatter
 * @package App\Services\DesignPatterns\Strategies\ArrayFormatter\Formatters
 */
class HtmlFormatter implements FormatterInterface
{
    /**
     * @param array $data
     * @return string
     */
    public function format(array $data): string
    {
        $html = '<ul>';
        foreach ($data as $liContent) {
            $html .= "<li>$liContent</li>";
        }
        $html .= '</ul>';

        return $html;
    }
}
