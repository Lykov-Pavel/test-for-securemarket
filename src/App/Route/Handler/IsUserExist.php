<?php

declare(strict_types=1);

namespace TestForSecuremarket\App\Route\Handler;

class IsUserExist
{
    public function __construct(
        private readonly array $listOfExistedUsers = [
            [
                'id' => 1,
                'email' => 'serjikaki1@gmail.com',
                'name' => 'Pavel Lykov'
            ],
            [
                'id' => 2,
                'email' => 'example@example.com',
                'name' => 'Example Example'
            ]
        ]
    ) {}

    /**
     * @param string $email
     * @return bool
     */
    public function execute(string $email): bool
    {
        return in_array(
            strtolower($email),
            array_map(
                function ($used) {
                    return strtolower($used['email']);
                },
                $this->listOfExistedUsers
            )
        );
    }
}