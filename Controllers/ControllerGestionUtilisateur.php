<?php
require_once '../Models/ManagerUtilisateur.php';

class ControllerGestionUtilisateur
{
    public function CreateUtilisateur() {

    }
    public function DeleteUtilisateur () {

    }
    public function UpdateUtilisateur () {

    }
    public function ReadUtilisateur ()
    {$a="";
        $data= new ManagerUtilisateur();
        $data->setPrenom($_POST['prenom']);
        $data->setNom($_POST['nom']);
        $data->setCentre($_POST['centre']);
        $data->setLogin($_POST['login']);
        $data->setPwd($_POST['pwd']);
        $data->setRole($_POST['role']);
        $data->setPromo($_POST['promo']);
        $data->setPerm($a);
        $data->afficherUtilisateur();
        $data= $data->getUtilisateur();





        foreach ($data as $bb){
            echo $bb->first_name;
            echo $bb->password;}




    }
//$a = new ManagerLogin();
//$a->getLog();
//echo $a->login;

}

$da= new ControllerGestionUtilisateur();
$da->ReadUtilisateur();
