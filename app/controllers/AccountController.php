<?php


namespace App\controllers;


class AccountController extends BaseController
{
    public function accountPage(){
        $this->template = 'accountPage.html';
        $nickname = func_get_args()[0];
        $accountData = $this->accountModel->getAccountDataByNickname($nickname);
        $this->data = $accountData[0];
        $this->data['searchResult'] = false;
        return $this->accountPageRender($this->data);

    }
    public function accountSearch(){
        $this->template = 'accountPage.html';
        $nickname = func_get_args()[0];
        $accountData = $this->accountModel->getAccountDataByNickname($nickname);
        $this->data = $accountData[0];
        $searchRequest = $this->request->getParsedBody()['search'];
        $this->data['searchResult'] = $this->accountModel->getSearchResult($searchRequest);
        return $this->accountPageRender($this->data);
    }
    public function accountPageRender($data){
        return [
            'AccountName' => $data["nickname"],
            'AccountFirstName' => $data["firstname"],
            'AccountLastName' => $data["lastname"],
            'AccountAge' => $data["age"],
            'AccountSearchResult' => $data['searchResult'],
        ];
    }
}