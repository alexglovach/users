<?php return [
    //['GET', '/', \App\Controllers\TableController::class, 'allTables'],
    ['GET', '/table/{name}', \App\Controllers\TableController::class, 'getData'],
    ['GET', '/table/{name}/page/{id:\d+}', \App\Controllers\TableController::class, 'getData'],
    ['POST', '/query', \App\Controllers\QueryController::class, 'query'],

    ['GET', '/', \App\Controllers\LoginController::class, 'login'],
    ['POST', '/login', \App\Controllers\LoginController::class, 'loginCheck'],
    ['GET', '/registration', \App\Controllers\RegistrationController::class, 'registration'],
    ['POST', '/registration', \App\Controllers\RegistrationController::class, 'registrationCheck'],
];