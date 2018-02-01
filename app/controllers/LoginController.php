<?php


namespace App\Controllers;

class LoginController extends BaseController
{
    public function login(){
        $this->template = 'loginWindow.html';
        $userChecked = false;
        if(isset($_COOKIE['user'])) {
            $userCookie = explode(',),', base64_decode($_COOKIE['user']));
            $userChecked = $this->loginModel->cookiesCheck($userCookie[0],$userCookie[1]);
        }
        if($userChecked){
            header("Location: /account/$userCookie[0]");
        }

        return [
            'loginError' => false,
        ];
    }

    public function loginCheck()
    {
        $this->template = 'loginWindow.html';
        $this->body = $this->request->getParsedBody();
        $nickname = isset($this->body['nickname']) ? $this->body['nickname'] : false;
        $password = isset($this->body['password']) ? $this->body['password'] : false;
        $loginError = false;
        if($nickname && $password){
           if($this->loginModel->loginCheck($nickname,$password)){
               $userCookie = base64_encode(implode(',),',array($nickname,md5($password))));

               setcookie("user", $userCookie, time()+3600);
               header("Location: /account/$nickname");
               exit;
           }else{
               $loginError = "Please, enter correct nickname or password";
           }
        }elseif (!$nickname && $password){
            $loginError = "Please, enter nickname";
        }elseif ($nickname && !$password){
            $loginError = "Please, enter password";
        }else{
            $loginError = "Please, enter all fields";
        }
        return [
            'loginError' => $loginError,
        ];
    }
}