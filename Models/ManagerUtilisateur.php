<?php

require_once('ManagerBdd.php');


class ManagerUtilisateur extends ManagerBdd
{
    public function GetUtilisateur()
    {
        $prenom="Alexendre";
        $nom="Eberle";
        $centre="Alexendre";
        $login="Eberle";
        $pwd="Alexendre";
        $role="etudiant";
        $perm="Alexendre";
        $promo="";

        $bdd = self::bdd();
        $query = $bdd->prepare("SELECT first_name, user_name, facility, login, password, roles, permission, promotion from users 
        NATURAL join supervised NATURAL join promotion NATURAL join define NATURAL join roles where first_name=? or user_name=? or facility=? or 
        login=?or password=? or roles=? or permission=? or promotion=?  ");
        $query->execute(array($prenom,$nom,$centre,$login,$pwd,$role,$perm,$promo));

        $results = $query->fetchAll(PDO::FETCH_OBJ);
        return $results;

    }

}

$a = new ManagerUtilisateur();
$a=$a->GetUtilisateur();
foreach ($a as $bb){
echo $bb->first_name;}



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
// SELECT first_name, user_name, facility, login, password, roles, permission, promotion from users
//        NATURAL join supervised NATURAL join promotion NATURAL join define NATURAL join roles; where first_name=? or user_name=?  or facility=? or
//        login=?or password=? or roles=? or permission=? or promotion=?






