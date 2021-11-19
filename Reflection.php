<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = null;
$request->password = null;
// ValidationUtil::validate($request);

try {
    ValidationUtil::validateReflection($request);
} catch (ValidationException $e) {
    echo "Error : {$e->getMessage()}" . PHP_EOL;
}

class RegisterUserRequest
{
    public ?string $name;
    public ?string $email;
    public ?string $username;
    public ?string $password;
}

$register = new RegisterUserRequest();

try {
    ValidationUtil::validateReflection($register);
} catch (ValidationException $e) {
    echo "Error : {$e->getMessage()}" . PHP_EOL;
}
