<?php


namespace App\Models;


class AccountModel extends BaseModel
{
    public function getAccountDataByNickname($nickname){
        $stmt = $this->connection->prepare("SELECT * FROM `userData` WHERE `nickname` = :nickname");
        $stmt->bindParam(':nickname',$nickname);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getSearchResult($request){
        $request = "%".$request."%";
        $stmt = $this->connection->prepare("SELECT * FROM `userData` WHERE
`nickname` LIKE :request OR
`firstname` LIKE :request OR
`lastname` LIKE :request OR
`age` LIKE :request");
        $stmt->bindParam(':request',$request);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}