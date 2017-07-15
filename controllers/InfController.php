<?php

/**
 * Created by PhpStorm.
 * User: mkhit
 * Date: 01.07.2017
 * Time: 14:28
 */
class InfController
{
    public function actionView()
    {
        include_once (ROOT.'/views/inf/view.php');

        return true;
    }
}