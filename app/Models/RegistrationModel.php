<?php


namespace App\Models;

class RegistrationModel extends BaseModel
{
    public function haveNickname($nickname)
    {
        $stmt = $this->connection->prepare("SELECT EXISTS(SELECT * FROM `users_table` WHERE `nickname` = :nickname)");
        $stmt->bindParam(':nickname',$nickname);
        $stmt->execute();
        return $stmt->fetchAll()[0][0];
    }

    public function addUser($firstname, $lastname, $age, $nickname, $password)
    {
        $md5Pass = md5($password);
        $stmt = $this->
        connection->
        prepare('INSERT INTO `users_table` (`firstname`,`lastname`,`age`,`nickname`,`password`) 
                  VALUES (:firstname, :lastname, :age, :nickname, :password)');
        $stmt->bindParam(':firstname',$firstname);
        $stmt->bindParam(':lastname',$lastname);
        $stmt->bindParam(':age',$age);
        $stmt->bindParam(':nickname',$nickname);
        $stmt->bindParam(':password',$md5Pass);
        $stmt->execute();
        return $stmt;
    }
}