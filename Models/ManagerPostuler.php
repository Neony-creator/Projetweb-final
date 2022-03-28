<?php
require_once('ManagerBdd.php');


class abba extends ManagerBdd
{
    public function ab()
    {

        $bdd=self::bdd();
        $login=$_SESSION['login'];

        $query = $bdd->prepare("SELECT password,login,id_user,permission FROM users natural join define where login=?");
        $query->execute(array($login));

        $results = $query->fetch(PDO::FETCH_OBJ);
        return $results;

    }
}

$a = new abba();
$a->ab();
echo $a->login;