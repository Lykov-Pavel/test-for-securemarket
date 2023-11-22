<?php

declare(strict_types=1);

namespace TestForSecuremarket\Http;

class Response
{
    /**
     * @param int $code
     * @param string $content
     */
    public function __construct(
        private int $code = 200,
        private string $content = ''
    ) {}

    /**
     * @return void
     */
    public function render(): void
    {
        http_response_code($this->getCode());
        echo $this->getContent();
    }

    /**
     * @param int $code
     */
    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}