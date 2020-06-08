<?php

namespace App\Services\DesignPatterns\Strategies\ArrayFormatter;

use App\Services\DesignPatterns\Strategies\ArrayFormatter\Formatters\FormatterInterface;
use App\Services\DesignPatterns\Strategies\ArrayFormatter\Formatters\HtmlFormatter;
use App\Services\DesignPatterns\Strategies\ArrayFormatter\Formatters\JSONFormatter;
use App\Services\DesignPatterns\Strategies\ArrayFormatter\Formatters\StringFormatter;
use http\Exception\InvalidArgumentException;

/**
 * Class ArrayFormatter
 * @package App\Services\DesignPatterns\Strategies\ArrayFormatter
 */
class ArrayFormatter
{
    const HTML_FORMAT = 'html';
    const JSON_FORMAT = 'json';
    const STRING_FORMAT = 'string';

    /**
     * @var FormatterInterface
     */
    protected $formatter;

    /**
     * ArrayFormatter constructor.
     * @param string $format
     */
    public function __construct(string $format)
    {
        switch ($format) {
            case self::HTML_FORMAT:
                $this->setFormatter(new HtmlFormatter());
                break;
            case self::JSON_FORMAT:
                $this->setFormatter(new JSONFormatter());
                break;
            case self::STRING_FORMAT:
                $this->setFormatter(new StringFormatter());
                break;
            default:
                throw new InvalidArgumentException("{$format} format is not supported");
        }
    }

    /**
     * @param array $data
     * @return string
     */
    public function format(array $data): string
    {
        return $this->formatter->format($data);
    }

    /**
     * @param FormatterInterface $formatter
     * @return void
     */
    public function setFormatter(FormatterInterface $formatter): void
    {
        $this->formatter = $formatter;
    }
}
