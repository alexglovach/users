<?php


namespace App\controllers;


class AccountController extends BaseController
{
    public function accountPage(){
        $this->template = 'accountPage.html';
        $nickname = func_get_args()[0];
        $accountData = $this->accountModel->getAccountDataByNickname($nickname);
        return [
            'AccountName' => $accountData[0]["nickname"],
            'AccountFirstName' => $accountData[0]["firstname"],
            'AccountLastName' => $accountData[0]["lastname"],
            'AccountAge' => $accountData[0]["age"],
        ];
    }
}