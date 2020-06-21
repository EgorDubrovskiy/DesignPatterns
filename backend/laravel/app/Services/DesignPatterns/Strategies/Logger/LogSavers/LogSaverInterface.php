<?php

namespace App\Services\DesignPatterns\Strategies\Logger\LogSavers;

/**
 * Interface LogSaverInterface
 * @package App\Services\DesignPatterns\Strategies\Logger\LogSavers
 */
interface LogSaverInterface
{
    public function save(string $message, string $statusCode): void;
}
