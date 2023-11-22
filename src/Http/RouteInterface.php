<?php

declare(strict_types=1);

namespace TestForSecuremarket\Http;

interface RouteInterface
{
    /**
     * @param Request $request
     * @return Response
     */
    public function execute(Request $request): Response;
}