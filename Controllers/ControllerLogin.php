<?php
session_start();
require_once ('../Models/ManagerLogin.php');




class ControllerLogin
{
    public function verifpwd ()
    {
        if (!empty($_POST['password']) && !empty($_POST['email'])){ // si formulaire est soumis
        $passhash=$_POST['password'];
        $_SESSION['login']=$_POST['email'];
        $databdd = new ManagerLogin();
        $databdd=$databdd->getLog();
        $pdwhash=$databdd->password;
        $id=$databdd->id_user;
        $permission=$databdd->permission;

            if (password_verify($passhash,$pdwhash )) { //verifie la validite du mots de passe
                setcookie('id_user', $id, time()+43200, '/');
                setcookie('permission', $permission, time()+43200, '/');
                //echo $_COOKIE['id_user']; test
                //echo $_COOKIE['permission'];
                header('location: /Projetweb-final/Views/Accueil.php');
            }
            else {
                echo "Password incorrect";


                header('location: /Projetweb-final/Views/Login.php?er=1');
            }
        }
        else { // si formulaire pas soumis

            header('location: /Projetweb-final/Views/Login.php?er=1');

        }
    }
}
$a= new ControllerLogin();
$a->verifpwd();

?>

