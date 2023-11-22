<?php

include_once dirname(dirname(__DIR__)) . '/vendor/autoload.php';

try {
    # create request instance ane run app in route handler
    (new TestForSecuremarket\App\Route\Handler())->execute(
        new TestForSecuremarket\Http\Request($_REQUEST, $_SERVER['REQUEST_METHOD'])
    )->render();
} catch (\Throwable $e) {
    # catch fatal errors
    http_response_code(500);
    echo 'Something went wrong.';
}