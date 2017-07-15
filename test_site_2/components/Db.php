<?php

/**
 * Created by PhpStorm.
 * User: mkhit
 * Date: 22.06.2017
 * Time: 15:25
 */
class Db
{
    public static  function getConnection()
    {
        $paramPath = ROOT.'/config/db_parameters.php';
        $params = include ($paramPath);


        $dsn = "mysql:host={$params['localhost']};dbname={$params['site']}";
        $db = new PDO($dsn,$params['username'],$params['password']);

        return $db;
    }
}