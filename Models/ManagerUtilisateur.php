<?php

require_once('ManagerBdd.php');


class ManagerUtilisateur extends ManagerBdd
{
    public function getUtilisateur()
    {

        $bdd = self::bdd();
        $query = $bdd->prepare("SELECT password,login,id_user,permission FROM users natural join define where login=?");
        $query->execute(array($login));

        $results = $query->fetch(PDO::FETCH_OBJ);
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
//






