<?php return [
    'mysql' => function ($env, $container) {
        $config = $env['mysql'];
        try
        {
            $pdo = new PDO($config["driver"] . ':host=' . $config["host"] . ';dbname=' . $config["database"],
                $config["username"],
                $config["password"]);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch(PDOException $e)
        {
            die("Error: ".$e->getMessage());
        }
    },
    'registrationModel' => function($env, $container){
        return new \App\Models\RegistrationModel($container);
    },
    'loginModel' => function($env, $container){
    return new \App\Models\LoginModel($container);
}
];
