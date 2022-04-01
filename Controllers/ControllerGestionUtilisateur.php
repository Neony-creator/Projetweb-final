<?php
session_start();
require_once '../Models/ManagerUtilisateur.php';


$data= new ManagerUtilisateur();
$data->setPrenom($_POST['prenom']);
$data->setNom($_POST['nom']);
$data->setCentre($_POST['centre']);
$data->setLogin($_POST['login']);
$data->setPwd($_POST['pwd']);
$data->setRole($_POST['role']);
$data->setPromo($_POST['promo']);
$data= $data->getUtilisateur();
$_SESSION['utilisateur']=$data;
header('Location: /Projetweb-final/Views/UtilisateurGestion.php?utilisateur=1');
?>

