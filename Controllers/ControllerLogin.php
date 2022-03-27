<?php
session_start();


if (!empty($_POST['password']) && !empty($_POST['email'])){ // si formulaire est soumis
    $passhash=password_hash($_POST['password'], PASSWORD_DEFAULT);
    $_SESSION['hash']=$passhash;
    $_SESSION['login']=$_POST['email'];


}
else { // si formulaire pas soumis

    header('location: http://localhost:63342/Projetweb-final/Views/Login.php');

} ?>

