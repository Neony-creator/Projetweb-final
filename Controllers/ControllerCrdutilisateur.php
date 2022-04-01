<?php
session_start();
require_once '../Models/ManagerUtilisateur.php';


if (isset($_POST['Creer'])) {

    $data = new ManagerUtilisateur();
    $data->setPrenom($_POST['prenom']);
    $data->setNom($_POST['nom']);
    $data->setCentre($_POST['centre']);
    $data->setLogin($_POST['login']);
    $data->setPwdHash($_POST['pwd']);
    $data->setRole($_POST['role']);
    $data->setPromo($_POST['promo']);
    $data->setPerm($_POST['permission']);
    $data->setId($_POST['id']);
    $data = $data->CreateUtilisateur();


    header('Location: /Projetweb-final/Views/UtilisateurGestion.php?utilisateur=1');
}

if (isset($_POST['Suppr'])) {

    $data = new ManagerUtilisateur();
    $data->setRole($_POST['role']);
    $data->setId($_POST['id']);
    $data = $data->DeleteUtilisateur();


    header('Location: /Projetweb-final/Views/UtilisateurGestion.php?utilisateur=1');
}

if (isset($_POST['Valider'])) {

    $data = new ManagerUtilisateur();
    $data->setPrenom($_POST['prenom']);
    $data->setNom($_POST['nom']);
    $data->setCentre($_POST['centre']);
    $data->setLogin($_POST['login']);
    $data->setPwdHash($_POST['pwd']);
    $data->setRole($_POST['role']);
    $data->setPromo($_POST['promo']);
    $data->setPerm($_POST['permission']);
    $data->setId($_POST['id']);
    $data = $data->UpdateUtilisateur();


    header('Location: /Projetweb-final/Views/UtilisateurGestion.php?utilisateur=1');
}
?>

