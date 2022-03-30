<?php
require_once('ManagerBdd.php');


class abba extends ManagerBdd
{
    public function ab()
    {

        $bdd=self::bdd();

        $login='neonyx.compte.pb@gmail.com';
        $query = $bdd->prepare("SELECT password,login,id_user,permission FROM users natural join define where login=?");
        $query->execute(array($login));

        $results = $query->fetch(PDO::FETCH_OBJ);
        return $results;

    }
}
$
$a = new abba();
$a=$a->ab();
echo $a->password;