<?php

/**
 * Created by PhpStorm.
 * User: mkhit
 * Date: 03.07.2017
 * Time: 13:44
 */
class User
{
    public static function register($name, $email, $password)
    {
        $db = Db::getConnection();

        $sql = 'INSERT INTO auth (name, email, password) '.
                'VALUES (:name, :email, :password)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();
    }
    public static function checkName($name)
    {
        if (strlen($name) >= 2)
        {
            return true;
        }
        return false;
    }
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) )
        {
            return true;
        }
        return false;
    }
    public static function checkPassword($password)
    {
        if (strlen($password) >= 6)
        {
            return true;
        }
        return false;
    }

    public static function checkEmailExist($email)
    {
        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM auth WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email,PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())

                return true;

        return false;

    }
    public static function checkUserData($email, $password)
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM auth WHERE email = :email AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':email',$email, PDO::PARAM_INT);
        $result->bindParam(':password',$password, PDO::PARAM_INT);
        $result->execute();

        $user = $result->fetch();
        if ($user){
            return $user['id'];
        }
        return false;
    }
    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }
    public static function checkLogged()
    {
        if (isset($_SESSION['user']))
        {
            return $_SESSION['user'];
        }
        header('Location: /user/login');
    }
}