<?php
session_start();
require_once ('Models/ManagerLogin.php');


class ControllerLogin
{
    public function verifpwd ()
    {
        if (!empty($_POST['password']) && !empty($_POST['email'])){ // si formulaire est soumis
            $passhash=password_hash($_POST['password'], PASSWORD_BCRYPT);
            $_SESSION['login']=$_POST['email'];
            $databdd = new ManagerLogin();
            $databdd=$databdd->getLog();
            $pdw=$databdd->password;

            if (password_verify($pdw, $passhash)) {
                echo "Password matches.";
            }
            else {
                echo "Password incorrect.";
            }
        }
        else { // si formulaire pas soumis

            header('location: /Projetweb-final/Views/Login.php');

        }
    }
}
$a= new ControllerLogin();
$a->verifpwd();

 ?>

