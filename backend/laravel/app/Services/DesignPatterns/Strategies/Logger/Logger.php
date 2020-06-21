<?php

namespace App\Services\DesignPatterns\Strategies\Logger;

use App\Services\DesignPatterns\Strategies\Logger\LogSavers\LogSaverInterface;

/**
 * Class Logger
 * @package App\Services\DesignPatterns\Strategies\Logger
 */
class Logger
{
    public const ERROR_STATUS_CODE = 'error';

    public const INFO_STATUS_CODE = 'info';

    /**
     * @var LogSaverInterface
     */
    protected $logSaver;

    /**
     * Logger constructor.
     * @param LogSaverInterface $logSaver
     */
    public function __construct(LogSaverInterface $logSaver)
    {
        $this->logSaver = $logSaver;
    }

    /**
     * @param string $message
     */
    public function error(string $message): void
    {
        $this->logSaver->save($message, self::ERROR_STATUS_CODE);
    }

    /**
     * @param string $message
     */
    public function info(string $message)
    {
        $this->logSaver->save($message, self::INFO_STATUS_CODE);
    }
}
