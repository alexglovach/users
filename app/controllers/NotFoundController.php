<?php


namespace App\controllers;


class NotFoundController extends BaseController
{
    public function notFound(){
        $this->template = '404.html';
        return [];
    }
}