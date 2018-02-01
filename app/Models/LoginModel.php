<?php


namespace App\Models;

class LoginModel extends BaseModel
{
    function loginCheck($nickname,$password){
        $password = md5($password);
        $stmt = $this->connection->prepare("SELECT EXISTS(SELECT * FROM `userSecurity` WHERE `nickname` = :nickname AND 
`password` = :password)");
        $stmt->bindParam(':nickname',$nickname);
        $stmt->bindParam(':password',$password);
        $stmt->execute();
        return $stmt->fetchAll()[0][0];
    }
}