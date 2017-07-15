<?php

/**
 * Created by PhpStorm.
 * User: mkhit
 * Date: 12.07.2017
 * Time: 9:25
 */
class Form
{
    public static function view()
    {
        if (isset($_POST['send-request'])){

            if ($_FILES['load']['error'] == 0) {
                if ($_FILES['load']['size'] <= 100000) {
                    if (
                    ( $_FILES['load']['type'] == 'image/jpeg')||
                    ($_FILES['load']['type'] == 'image/png')||
                    ($_FILES['load']['type'] == 'image/gif')||
                    ($_FILES['load']['type']     == 'image/bmp')||
                    ($_FILES['load']['type'] == 'image/jpg')
                    )
                    {
                        copy($_FILES['load']['tmp_name'],'template/images/'. $_FILES['load']['name']);
                        echo 'Был скопирован 1 файл';
//                        print_r($_FILES);
                    }
                }
            }
            else {
                echo 'error server';
            }
        }
    }
}