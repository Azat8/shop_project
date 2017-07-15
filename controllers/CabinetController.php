<?php

include_once (ROOT.'/models/Form.php');
class CabinetController
{
    public function actionIndex()
    {
        $userId = User::checkLogged();

        echo '<p>User</p>'. $userId;


        $form = Form::view();

        include_once (ROOT.'/views/cabinet/index.php');
        return true;
    }

}