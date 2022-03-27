<?php
session_start();


if (!empty($_POST['password']) && !empty($_POST['email'])){ // si formulaire est soumis
    $passhash=password_hash($_POST['password'], PASSWORD_BCRYPT);

    $a='$2y$10$QNzBIrTQ5dvHyo6ryR.xReZNZr7Og7JN34YjEa8AK2xbZ.bWQjQDe';
    $_SESSION['login']=$_POST['email'];
    echo $_SESSION['hash'];

    if (password_verify($_POST['password'], $a)) {
        echo "Password matches.";
    }
    else {
        echo "Password incorrect.";
    }
}
else { // si formulaire pas soumis

    header('location: /Projetweb-final/Views/Login.php');

} ?>

