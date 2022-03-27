

<?php
class ManagerBdd

{
    protected function bdd()
    {
        $error = false;

        try {                                                                   /*Tente une connexion...*/
            $bdd = new PDO('mysql:dbname=projetweb;host=127.0.0.1:3306', "root", "CESI123");                 /*Creation objet PDO et init de la connexion*/
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);/*Définition de toutes erreurs en tant qu'Exception*/
        }

        catch(PDOException $e) {                                              /*Si erreur attrapée*/
            $error = $e->getMessage();                                          /*Stock le msg de l'erreur dans error*/
        }

        if ($error==false)
        {
            return $bdd;
        }
        else
        { echo "<script>alert('error')</script>";
            die('erreur');
        }

    }
}

/*Erreur de connexion à false avant connexion*/

