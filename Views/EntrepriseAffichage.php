<!doctype html>
<?php
$dsn = 'mysql:dbname=projetweb;localhost';                /*Chaine de connexion avec IP et BDD */
$username_bdd = "root";                                                 /*Nom d'utilisateur pour MySQL */
$password_bdd = "cesi";                                               /*Mot de passe pour MySQL*/
$error = false;                                                         /*Erreur de connexion à false avant connexion*/

try {                                                                   /*Tente une connexion...*/
    $bdd = new PDO($dsn, $username_bdd, $password_bdd);                 /*Creation objet PDO et init de la connexion*/
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);      /*Définition de toutes erreurs en tant qu'Exception*/
} catch(PDOException $e) {                                              /*Si erreur attrapée*/
    $error = $e->getMessage();                                          /*Stock le msg de l'erreur dans error*/
    echo $error;
}

if (!$error) {
    $query = $bdd->prepare('SELECT  name_offer, skills, description, internship_duration, company_name, mail, sector_of_activity, number_of_trainees, Town, evaluation_of_trainees, start_date, remuneration_basis, number_of_places_offered, trust_of_pilot FROM company NATURAL JOIN location NATURAL JOIN evaluate NATURAL JOIN offer;');
    $query->execute();
    $results = $query->fetchALL(PDO::FETCH_OBJ);


}

?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/Public/css/entreprise_affichage.css" />
    <title>PROJET WEB, groupe 4</title>
</head>
<section>
    <!-- Logo -->
    <div id="logo">
        <p> <img src="/Public/file/logo.png" alt="logo cesi" title="Qu'est ce qu'il est beau quand même !"/> </p>
    </div>

    <!-- Bouton Wish-list -->
    <div id="WL">

        <a href ="Souhait.php">
            <button type="button" class="btn btn-lg btn-dark">Wish-list</button>
        </a>
    </div>

    <!-- Titre -->
    <div id="title">
        <h1>CESI-TON-STAGE</h1>
    </div>

</section>

<header class="sticky-top">
    <!-- Barre de navigation -->
    <div id="navigbar">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse btn-lg " id="mynavbar">
                    <ul class="navbar-nav ">
                        <li class="nav-item" style="padding-right : 2em;">
                            <a class="nav-link" href="Accueil.php">Acceuil</a>
                        </li>
                        <li class="nav-item " style="padding-right : 2em;">
                            <a class="nav-link" href="Login.php">Connection</a>
                        </li>
                        <li class="nav-item" style="padding-right : 2em;">
                            <a class="nav-link" href="EntrepriseAffichage.php">Entreprise</a>
                        </li>
                        <li class="nav-item" style="padding-right : 2em;">
                            <a class="nav-link" href="StageAffichage.php">Stage</a>
                        </li>
                        <li class="nav-item" style="padding-right : 2em;">
                            <a class="nav-link" href="Candidature.php">Candidature</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Gestion
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="EntrepriseGestion.php">Gestion entreprise</a></li>
                                <li><a class="dropdown-item" href="StageGestion.php">Gestion stage</a></li>
                                <li><a class="dropdown-item" href="UtilisateurGestion.php">Gestion etudiant</a></li>
                                <li><a class="dropdown-item" href="#">Gestion délégué</a></li>
                                <li><a class="dropdown-item" href="UtilisateurGestion.php">Gestion pilote</a></li>
                            </ul>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<!-- Body -->


<body>
<div id="section1">
    <section>
        <div class="container-fluid">
            <div class="row border border-dark border-2">
                <div class="col-5 border-end border-dark border-2">
                    <p class=" title h2 text-decoration-underline" > Entreprise : <?= $results[1]->company_name ?> </p>
                    <article class="textnormale h5">
                        <h5>Secteur d'activité : <?= $results[1]->sector_of_activity ?></h5>
                        <h5>Ville : <?= $results[1]->Town ?></h5>

                        <form>
                            <label for="Note">Mettre une note</label>
                            1 <input type = "radio" id="Note" name = "sat" value = "1">
                            2 <input type = "radio" id="Note" name = "sat" value = "2">
                            3 <input type = "radio" id="Note" name = "sat" value = "3">
                            4 <input type = "radio" id="Note" name = "sat" value = "4">
                            5 <input type = "radio" id="Note" name = "sat" value = "5">
                            <input type="submit" id="submit" value="Soumettre">
                        </form>
                    </article>
                </div>
                <div class="col-lg-6 bor ">
                    <article class="textnormale h5 lh-base">
                        <h5>Nombre de stagaire déja embauché : <?= $results[1]->number_of_trainees ?></h5>
                        <h5>Note des stagiaire : <?= $results[1]->evaluation_of_trainees ?>/5</h5>
                        <div id="blocktxt1">
                            <h5>Confiance du pilote de promotion : <?= $results[1]->trust_of_pilot ?></h5>
                            <h5>Adresse mail : <?= $results[1]->mail?></h5>
                        </div>
                    </article>
                </div>
            </div>
            <br>
        </div>
    </section>
</div>

<p class=" title h1 text-decoration-underline" > Offre proposé : </p>

<section class="container-fluid border border-dark border-2">
    <br>
    <div class="container">


        <div class="row border border-dark border-2">
            <div id="stat_stage1" class="col-5 border-end border-dark border-2">
                <p class=" title h1 text-decoration-underline" > Stage : <?= $results[1]->name_offer ?> </p>
                <article class="textnormale h5">
                    Compétence :<?= $results[1]->skills ?>
                    <br>
                    Note de l'entreprise :<?= $results[1]->company_name ?>

                    <br>
                    Secteur d'activité :<?= $results[1]->sector_of_activity ?>
                    <br>
                    Ville :
                    <br>
                    Durée du stage :<?= $results[1]->internship_duration ?>
                    <br>
                    Date de début: <?= $results[1]->start_date ?>
                    <br>
                    Base de rémunération : <?= $results[1]->remuneration_basis ?>
                    <br>
                    Nombre de place offerte :<?= $results[1]->number_of_places_offered ?>
                </article>
            </div>
            <div id="stat_stage2" class="col-6 bor ">
                <article class="textnormale h5 lh-base">
                    <h3 >En quoi conciste ce stage ?</h3>
                    <br>
                    <p><?= $results[1]->description ?></p>

                </article>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <br><br><br>
</body>

<!-- Footer -->
<footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">CESI Strasbourg</h5>

                <p>
                    67380 Lingolsheim<br>
                    Parc des Tanneries<br>
                    Lingolsheim<br>
                    France
                </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div style="text-align: center" class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Retrouvez l’actualité de CESI sur</h5>

                <p>
                    <a href="https://twitter.com/CesiStrasbourg">Twitter</a><br>
                    <a href="https://www.facebook.com/cesistrasbourg/">Facebook</a><br>
                    <a href="https://www.youtube.com/channel/UCWanyqUivV6rjbTABGFI8pA">Youtube</a><br>
                    <a href="https://www.instagram.com/campus_cesi/?hl=fr">Instagram</a><br>
                </p>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        <a class="text-dark" href="https://www.economie.gouv.fr/entreprises/site-internet-mentions-obligatoires">Mention légales</a>
        <br>
        © 2022 Copyright:
        <a class="text-dark" href="https://www.cesi.fr//">Cesi.fr</a>
    </div>
    <!-- Copyright -->
</footer>
</html>
