<?php return [
    ['GET', '/', \App\Controllers\LoginController::class, 'login'],
    ['POST', '/login', \App\Controllers\LoginController::class, 'loginCheck'],
    ['GET', '/registration', \App\Controllers\RegistrationController::class, 'registration'],
    ['POST', '/registration', \App\Controllers\RegistrationController::class, 'registrationCheck'],
];