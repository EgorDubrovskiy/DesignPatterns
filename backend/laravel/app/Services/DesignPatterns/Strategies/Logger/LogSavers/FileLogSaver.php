<?php

namespace App\Services\DesignPatterns\Strategies\Logger\LogSavers;

/**
 * Class BaseLogSaver
 * @package App\Services\DesignPatterns\Strategies\Logger\LogSavers
 */
abstract class FileLogSaver implements LogSaverInterface
{
    /**
     * @return string
     */
    abstract protected function getFilesPathPrefix(): string;

    /**
     * @return string
     */
    abstract protected function getFileExtension(): string;

    /**
     * @return string
     */
    protected function getFilesPath(): string
    {
        return storage_path() . '/logs' . $this->getFilesPathPrefix();
    }

    /**
     * @return string
     */
    protected function generateFilePath(): string
    {
        return $this->getFilesPath() . '/' . now()->toDateString() . '.' . $this->getFileExtension();
    }
}
