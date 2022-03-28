<?php
session_start();
require_once('ManagerBdd.php');


class ManagerLogin extends ManagerBdd
{
    public function getLog()
    {

        $bdd=self::bdd();
        $login=$_SESSION['login'];

        $query = $bdd->prepare("SELECT password,login,id_user,permission FROM users natural join define where login=$login");
        $query->execute();

        $results = $query->fetchAll(PDO::FETCH_OBJ);
        return $results;

    }
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






