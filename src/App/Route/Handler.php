<?php

declare(strict_types=1);

namespace TestForSecuremarket\App\Route;

use TestForSecuremarket\App\Route\Handler\IsUserExist;
use TestForSecuremarket\App\Route\Handler\Params;
use TestForSecuremarket\App\Route\Handler\UserExistException;
use TestForSecuremarket\App\UserException;
use TestForSecuremarket\Http\Request;
use TestForSecuremarket\Http\Response;
use TestForSecuremarket\Http\RouteInterface;
use TestForSecuremarket\Lib\Logger;

class Handler implements RouteInterface
{
    /**
     * @param Request $request
     * @return Response
     * @throws UserException
     */
    public function execute(Request $request): Response
    {
        # validate request
        $params = $request->getParams()['user'];
        $logger = new Logger('users.log');
        $response = new Response();

        try {
            $this->validate($params);
            $logger->write(sprintf('User %s successfully registered', $params[Params::EMAIL->value]));
        } catch (UserExistException $e) {
            $logger->write(sprintf('User %s already exist', $params[Params::EMAIL->value]));
            $response->setCode(409);
            $response->setContent($e->getMessage());
        } catch (UserException $e) {
            $response->setCode(400);
            $response->setContent($e->getMessage());
        } catch (\Throwable $e) {
            $response->setCode(500);
            $response->setContent('Something went wrong.');
        }

        return $response;
    }

    /**
     * @param array $params
     * @return void
     * @throws UserException
     * @throws UserExistException
     */
    private function validate(array $params): void
    {
        if (!$params[Params::FIRSTNAME->value]) {
            throw new UserException('Firstname must be filled.');
        }

        if (!$params[Params::LASTNAME->value]) {
            throw new UserException('Lastname must be filled.');
        }

        if (!($email = $params[Params::EMAIL->value]) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new UserException('Email param is incorrect.');
        }

        if (!$params[Params::LASTNAME->value]) {
            throw new UserException('Lastname must be filled.');
        }

        if (!($password = $params[Params::PASSWORD->value])
            || !($passwordRepeat = $params[Params::PASSWORD_REPEAT->value])
        ) {
            throw new UserException('Password params must be filled.');
        }

        if ($password !== $passwordRepeat) {
            throw new UserException('Password Repeat must be equal.');
        }

        if ((new IsUserExist())->execute($email)) {
            throw new UserExistException('User already exist.');
        }
    }
}