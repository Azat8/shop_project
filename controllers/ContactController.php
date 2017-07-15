<?php

/**
 * Created by PhpStorm.
 * User: mkhit
 * Date: 01.07.2017
 * Time: 14:36
 */
class ContactController
{
    public function actionView()
    {
        include_once (ROOT.'/views/contact/view.php');

        return true;
    }
}