<?php

declare(strict_types=1);

namespace TestForSecuremarket\Lib;

class Logger
{
    public function __construct(
        private readonly string $fileName = 'debug.log'
    ) {}

    /**
     * @param string $text
     * @return void
     */
    public function write(string $text = ''): void
    {
        try {
            file_put_contents(
                sprintf('%s/../var/logs/%s', __DIR__, $this->fileName),
                sprintf("[%s] %s\n", (new \DateTime())->format('r'), $text),
                FILE_APPEND
            );
        } catch (\Exception $e) {
            # Do nothing (logging usually is low priority operation)
        }
    }
}