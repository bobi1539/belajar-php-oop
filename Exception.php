<?php
require_once "data/LoginRequest.php";
require_once "exception/ValidationException.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "123";

try {
    validateLoginRequest($loginRequest);
    echo "Valid" . PHP_EOL;
} catch (ValidationException | Exception $e) {
    echo $e->getMessage() . PHP_EOL;

    // sebagai string
    echo $e->getTraceAsString() . PHP_EOL;

    // sebagai array
    // var_dump($e->getTrace());
} finally {
    echo "Error tidak error, tetap dipanggil" . PHP_EOL;
}

// atau bisa juga dengan ini
// try {
//     validateLoginRequest($loginRequest);
//     echo "Valid" . PHP_EOL;
// } catch (ValidationException $e) {
//     echo $e->getMessage() . PHP_EOL;
// } catch (Exception $e) {
//     echo $e->getMessage() . PHP_EOL;
// }

