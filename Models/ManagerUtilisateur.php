<?php

require_once('ManagerBdd.php');


class ManagerUtilisateur extends ManagerBdd
{
    public function getUtilisateur()
    {

        $bdd = self::bdd();
        $query = $bdd->prepare("SELECT first_name, user_name, facility, login, password, roles, permission, promotion from users 
        NATURAL join supervised NATURAL join promotion NATURAL join define NATURAL join roles; where first_name=? or user_name=? or facility=? or 
        login=?or password=? or roles=? or permission=? or promotion=? ");
        $query->execute(array($login));

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
//






