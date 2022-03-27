<?php
session_start();
require_once('ManagerBdd.php');


class ManagerLogin extends ManagerBdd
{
    public function getLog()
    {

        $bdd=self::bdd();

        $query = $bdd->prepare("SELECT password,login,id_user,permission FROM users natural join define");
        $query->execute();

        $results = $query->fetchAll(PDO::FETCH_OBJ);
        return $results;

    }
}

$a = new ManagerLogin();
$a=$a->getLog();

foreach ($a as $aa)
{   echo $aa->password;
    echo $aa->login;
    echo $aa->id_user;
    echo $aa->permission;
}



//session_start();
//require_once('ManagerBdd.php');


//class ManagerLogin extends ManagerBdd
//{
//    public function getLog()
//    {
//        $hash = $_SESSION['hash'];
//        $login = $_SESSION['login'];
//        $bdd = self::bdd();
//
//        $query = $bdd->prepare("SELECT password, login FROM users where password= '$hash' and login='$login'");
//        $query->execute();
//
//        $results = $query->fetchALL(PDO::FETCH_OBJ);
//        return $results;
//    }
//}
//
//$a = new ManagerLogin();
//$a->getLog();
//echo $a->login;






