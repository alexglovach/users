<?php


namespace App\Models;


class AccountModel extends BaseModel
{
    public function getAccountDataByNickname($nickname){
        $stmt = $this->connection->prepare("SELECT * FROM `users_table` WHERE `nickname` = :nickname");
        $stmt->bindParam(':nickname',$nickname);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}