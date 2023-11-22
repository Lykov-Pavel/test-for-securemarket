<?php

declare(strict_types=1);

namespace TestForSecuremarket\App\Route\Handler;

enum Params: string {
    case FIRSTNAME = "firstname";
    case LASTNAME = "lastname";
    case EMAIL = "email";
    case PASSWORD = "password";
    case PASSWORD_REPEAT = "password-repeat";
}
