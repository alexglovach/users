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
        $registrationSuccess = false;
        if(!$firstName || !$lastName || !$age || !$nickname || !$password){
            $registrationError = "Please, enter all fields";
        }else{
            $res = $this->registrationModel->haveNickname($nickname);
            if(!$res){
                $this->registrationModel->addUser($firstName, $lastName, $age, $nickname, $password);
                $registrationSuccess = "Nickname $nickname successfull created";
            }else{
                $registrationError = "Nickname $nickname allready used. Please, select other nickname";
            }

        }
        return [
            'registrationError' => $registrationError,
            'registrationSuccess' => $registrationSuccess,
        ];
    }
}