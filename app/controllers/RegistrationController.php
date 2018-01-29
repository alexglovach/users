<?php


namespace App\Controllers;

class RegistrationController extends BaseController
{
    public function registration(){
        $this->template = 'registrationWindow.html';
        return [
            'loginError' => false,
        ];
    }

    public function registrationCheck()
    {
        $this->template = 'registrationWindow.html';
        $this->body = $this->request->getParsedBody();
        $firstName = isset($this->body['firstname']) ? $this->body['firstname'] : false;
        $lastName = isset($this->body['lastname']) ? $this->body['lastname'] : false;
        $age = isset($this->body['age']) ? $this->body['age'] : false;
        $nickname = isset($this->body['nickname']) ? $this->body['nickname'] : false;
        $password = isset($this->body['password']) ? $this->body['password'] : false;
        $registrationError = false;
        if(!$firstName || !$lastName || !$age || !$nickname || !$password){
            $registrationError = "Please, enter all fields";
        }else{
            var_dump('go to database');
            var_dump('go to next page');
        }
        return [
            'registrationError' => $registrationError,
        ];
    }
}