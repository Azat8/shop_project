<?php

/**
 * Created by PhpStorm.
 * User: mkhit
 * Date: 01.07.2017
 * Time: 14:50
 */
class UserController
{
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        $result = false;

        if (isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name))
            {
                $errors[] = 'name length 2 - ....';
            }

            if (!User::checkEmail($email))
            {
                $errors[] = 'false email';
            }

            if (!User::checkPassword($password))
            {
                $errors[] = 'password length 6 - ....';
            }

            if (User::checkEmailExist($email))
            {
                $errors[] = 'Такой email уже зарегистрирован';
            }

            if ($errors == false)
            {
                $result[] = User::register($name, $email, $password);
            }
        }
        include_once (ROOT.'/views/user/register.php');
    }
    public function actionLogin()
    {
        $email = '';
        $password = '';

        if (isset($_POST['submit']))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkEmail($email))
            {
                $errors[] = 'false email';
            }

            if (!User::checkPassword($password))
            {
                $errors[] = 'password length 6 - ....';
            }

            $userId = User::checkUserData($email, $password);

            if ($userId == false)
            {
                $errors[] = 'Неправильный данные для входа на сайт ';
            }
            else{
                User::auth($userId);

                header('Location: /cabinet/');
            }
        }

         include_once (ROOT.'/views/user/login.php');

        return true;
    }
    public function actionLogout()
    {
        unset($_SESSION['user']);
        header('Location: /');
    }
};