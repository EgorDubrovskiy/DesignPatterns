<?php

namespace App\Services\DesignPatterns\Strategies\Logger\LogSavers;

/**
 * Class HtmlFileLogSaver
 * @package App\Services\DesignPatterns\Strategies\Logger\LogSavers
 */
class HtmlFileLogSaver extends FileLogSaver
{
    /**
     * @param string $message
     * @param string $statusCode
     */
    public function save(string $message, string $statusCode): void
    {
        $fileContent = "<div class='message $statusCode'>$message</div>" . PHP_EOL;

        file_put_contents($this->generateFilePath(), $fileContent, FILE_APPEND);
    }

    /**
     * @return string
     */
    protected function getFileExtension(): string
    {
        return 'html';
    }

    /**
     * @return string
     */
    protected function getFilesPathPrefix(): string
    {
        return '/html';
    }
}
