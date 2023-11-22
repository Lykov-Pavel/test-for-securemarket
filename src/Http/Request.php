<?php

declare(strict_types=1);

namespace TestForSecuremarket\Http;

class Request
{
    /**
     * @param string[] $params
     * @param string $method
     */
    public function __construct(
        private readonly array $params,
        private readonly string $method
    ){
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
}