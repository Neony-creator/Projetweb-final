<!doctype html>

<?php
$dsn = 'mysql:dbname=projet;host=127.0.0.1:3306';                /*Chaine de connexion avec IP et BDD */
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
$query = $bdd->prepare('SELECT name_offer, company_name, skills, trust_of_pilot, sector_of_activity, Town, internship_duration, start_date, remuneration_basis, number_of_places_offered, description FROM offer NATURAL JOIN location NATURAL JOIN company NATURAL JOIN evaluate;');
$query->execute();
$results = $query->fetchALL(PDO::FETCH_OBJ);
?>


<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href=".\assets\css\souhait.css" />
    <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
    <title>Souhait - PROJET WEB</title>
</head>

<section class="top">
    <!-- Logo -->
    <div id="logo">
        <p> <img src="assets/file/logo.png" alt="logo cesi" title="Qu'est ce qu'il est beau quand même ! "/> </p>
    </div>

    <!-- Bouton Wish-list -->
    <div id="WL">

        <a href ="#">
            <button type="button" class="btn btn-lg btn-dark">Wish-list</button>
        </a>
    </div>

    <!-- Titre -->
    <center>
        <div id="title">
            <h1>Titre</h1>
        </div>
    </center>

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
                            <a class="nav-link" href="#">Acceuil</a>
                        </li>
                        <li class="nav-item " style="padding-right : 2em;">
                            <a class="nav-link" href="#">Connection</a>
                        </li>
                        <li class="nav-item" style="padding-right : 2em;">
                            <a class="nav-link" href="#">Entreprise</a>
                        </li>
                        <li class="nav-item" style="padding-right : 2em;">
                            <a class="nav-link" href="#">Stage</a>
                        </li>
                        <li class="nav-item" style="padding-right : 2em;">
                            <a class="nav-link" href="#">Candidature</a>
                        </li>
                        <li class="nav-item" style="padding-right : 2em;">
                            <a class="nav-link" href="#">Gestion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<!-- Body -->


<body>

<div>
    <h3 id="liste">Votre liste de souhaits</h3>
    <?php foreach ($results as $result){ ?>
        <div class="bubble ml-3">
            <table>
                <tr>
                    <td colspan="2">Stage
                        <div class="croix">
                            <i class="fas fa-times"></i>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Entreprise : <?= $result-> company_name ?><br/> Competences : <?= $result->skills ?><br/> Note de l'entreprise : <?= $result->trust_of_pilot ?><br/> Secteur d'activite : <?= $result->sector_of_activity ?><br/> Ville : <?= $result-> Town ?> <br/> Duree du stage : <?= $result->internship_duration ?> <br/> Date de debut :<?= $result->start_date ?> <br/> Base de remuneration : <?= $result-> remuneration_basis ?> <br/> Nombre de place offertes : <?= $result-> number_of_places_offered  ?> </td>
                    <td>En quoi consiste ce stage ?<br/> <?= $result-> description ?> <br/><!--<br/><br/><br/><br/><br/><br/><br/>-->
                        <label>Note : </label>
                        <from>
                            1 <input type = "radio" name = "sat" value = "1">
                            2 <input type = "radio" name = "sat" value = "2">
                            3 <input type = "radio" name = "sat" value = "3">
                            4 <input type = "radio" name = "sat" value = "4">
                            5 <input type = "radio" name = "sat" value = "5">
                        </from>
                    </td>
                </tr>
            </table>
            <br/>
        </div>
    <?php } ?>

</div>



<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
<br><br><br>
<script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="assets/js/souhait.js"></script>
</body>

<!-- Footer -->
<footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Footer text</h5>

                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                    molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                    aliquam voluptatem veniam, est atque cumque eum delectus sint!
                </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Footer text</h5>

                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                    molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                    aliquam voluptatem veniam, est atque cumque eum delectus sint!
                </p>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-dark" href="https://www.cesi.fr//">Cesi.fr</a>
    </div>
    <!-- Copyright -->
</footer>
</html>

<?php } ?>