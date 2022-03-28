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
    $query = $bdd->prepare('SELECT  company_name, sector_of_activity, number_of_trainees, Town, evaluation_of_trainees, trust_of_pilot FROM company NATURAL JOIN location NATURAL JOIN evaluate;');
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
    <link rel="stylesheet" href="/Public/css/style.css" />
    <link rel="stylesheet" href="/Public/css/entreprise_recherche.css" />

    <title>PROJET WEB, groupe 4</title>
</head>
<section>
    <!-- Logo -->
    <div id="logo">
        <p> <img src="/Public/file/logo.png" alt="logo cesi" title="Qu'est ce qu'il est beau quand même !"/> </p>
    </div>

    <!-- Bouton Wish-list -->
    <div id="WL">

        <a href ="#">
            <button type="button" class="btn btn-lg btn-dark">Wish-list</button>
        </a>
    </div>

    <!-- Titre -->
    <div style="text-align: center;">
        <div id="title">
            <h1>Cesi ton stage</h1>
        </div>
    </div>

</section>

<header  class="sticky-top">
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Gestion
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Gestion entreprise</a></li>
                                <li><a class="dropdown-item" href="#">Gestion stage</a></li>
                                <li><a class="dropdown-item" href="#">Gestion etudiant</a></li>
                                <li><a class="dropdown-item" href="#">Gestion délégué</a></li>
                                <li><a class="dropdown-item" href="#">Gestion pilote</a></li>
                            </ul>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<!-- Body -->


<body>
<div class="tout">
    <div class="recherche">
        <div class="container">
            <h2>Rechercher</h2>
            <form>
                <fieldset>


                    <div class="form-group">
                        <label for="nom">Nom de l'entreprise</label>
                        <input type="text" class="form-control" id="nom" placeholder="Pierre GIRAUD">
                    </div>

                    <div class="form-group">
                        <label for="Ville">Ville</label>
                        <input type="text" class="form-control" id="Ville" placeholder="Strasbourg">
                    </div>

                    <div class="form-group">
                        <label for="selection">Secteur d'activité</label>
                        <select id="selection" class="form-control">
                            <option value="">Liste de choix...</option>
                            <optgroup label="Groupe d'options">
                                <option value="">Informatique</option>
                                <option value="">BTP</option>
                                <option value="">Générale</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nbstagiaire">Nombre de stagiaire</label>
                        <input type="number" class="form-control" id="nbstagiaire" placeholder="5">
                    </div>

                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <div class="note">
                        <div class="eval">
                            <h6>Evaluation des stagiaires</h6>
                        </div>
                        <div class="etoile">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>


                    <div class="eval2">
                        <h6>Appréciation des pilotes</h6>
                    </div>

                    <div class="etoile2">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <br>
                    <input type="submit" id="submit" value="Soumettre">


                </fieldset>
            </form>
        </div>
    </div>
    <div class="entreprise">

        <div class="container-fluid">
            <div class="row border border-dark border-2">
                <div class="col-4 border-end border-dark border-2">
                    <p class=" title h1 text-decoration-underline" > Entreprise : </p>
                    <article class="textnormale h5">
                        <h5>Secteur d'activité :</h5>
                        <h5>Ville :</h5>
                        <div id="title1"><h5>Mettre une Note :</h5></div>
                        <div class="etoile">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 bor ">
                    <article class="textnormale h5 lh-base">
                        <h5>Nombre de stagaire déja embauché :</h5>
                        <div id="title2"> <h5>Evaluation des stagiaires :</h5> </div>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                        <div class="note">
                            <div class="etoile">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <div id="blocktxt1">
                            <h5>Confiance du pilote de promotion :</h5>
                            <h5>Adresse mail :</h5>
                        </div>
                    </article>
                </div>
            </div>

        </div>
    </div>
</div>




<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



</body>

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
        Â© 2022 Copyright:
        <a class="text-dark" href="https://www.cesi.fr//">Cesi.fr</a>
    </div>
    <!-- Copyright -->
</footer>
</html>
