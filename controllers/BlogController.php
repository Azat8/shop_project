<?php

/**
 * Created by PhpStorm.
 * User: mkhit
 * Date: 01.07.2017
 * Time: 14:09
 */
class BlogController
{
    public function actionView()
    {
        include_once (ROOT.'/views/blog/view.php');

        return true;
    }
}