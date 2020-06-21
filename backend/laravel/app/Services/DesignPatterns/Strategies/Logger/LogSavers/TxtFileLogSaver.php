<?php

namespace App\Services\DesignPatterns\Strategies\Logger\LogSavers;

/**
 * Class TxtFileLogSaver
 * @package App\Services\DesignPatterns\Strategies\Logger\LogSavers
 */
class TxtFileLogSaver extends FileLogSaver
{
    /**
     * @param string $message
     * @param string $statusCode
     */
    public function save(string $message, string $statusCode): void
    {
        $fileContent = "Message: $message " . PHP_EOL . "Status code: $statusCode" . PHP_EOL;

        file_put_contents($this->generateFilePath(), $fileContent, FILE_APPEND);
    }

    /**
     * @return string
     */
    protected function getFileExtension(): string
    {
        return 'txt';
    }

    /**
     * @return string
     */
    protected function getFilesPathPrefix(): string
    {
        return '/txt';
    }
}
