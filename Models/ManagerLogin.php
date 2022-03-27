<?php
session_start();
require_once('ManagerBdd.php');



class ManagerLogin extends ManagerBdd
{
    public function getLog()
    {
        $passwordpost = $_POST['password'];
        $loginpost = $_POST['email'];
        $bdd=this->bdd();

        $query = $bdd->prepare('SELECT password, login FROM user where password= :password and login=:login;');
        $query->executeexecute([
            'password' => $_SESSION['hash'],
            'login' => $_SESSION['hash'],
            ]);

        $results = $query->fetchALL(PDO::FETCH_OBJ);
        return $results;
    }
}




