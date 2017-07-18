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
        $db = Db::getConnection();

        if (isset($_POST['send-request'])){
        $image = $_FILES['load']['name'];

        if (isset($_POST['send-request']))
        {
            $result = $db->query("INSERT INTO cabinet(`name`) VALUES ('$image');");

        }


//        $sql = $db->query('SELECT * FROM cabinet(`name`)');
//
//        $arr = [];
//
//        $i = 0;
//
//        while ($row = $sql->fetch())
//        {
//            $arr[$i]['name'] = $row['name'];
//            $i++;
//        }
            if ($_FILES['load']['error'] == 0) {
                if ($_FILES['load']['size'] <= 100000) {
                    if (
                    ( $_FILES['load']['type'] == 'image/jpeg')||
                    ($_FILES['load']['type'] == 'image/png')||
                    ($_FILES['load']['type'] == 'image/gif')||
                    ($_FILES['load']['type'] == 'image/bmp')||
                    ($_FILES['load']['type'] == 'image/jpg')
                    )
                    {
                        copy($_FILES['load']['tmp_name'],'template/images/cabinet/'. $_FILES['load']['name']);
                        echo 'Был скопирован 1 файл';
                    }
                }
            }
            else {
                echo 'error server';
            }

        }

    }
}