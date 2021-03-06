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
    $query = $bdd->prepare('SELECT  company_name, mail, sector_of_activity, number_of_trainees, Town, evaluation_of_trainees, trust_of_pilot FROM company NATURAL JOIN location NATURAL JOIN evaluate;');
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
    <link rel="stylesheet" href="/Public/css/entreprise_gestion.css" />

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


<div class="recherche">
    <div class="container">
        <h2>Rechercher & Création</h2>
        <form action=EntrepriseGestion.php method="get">
            <div class="form-group">
                <label for="nom">Nom de l'entreprise</label>
                <input type="text" class="form-control" id="nom" name="Nom" >
            </div>

            <div class="form-group">
                <label for="Ville">Ville</label>
                <input type="text" class="form-control" name="Ville" id="Ville" ">
            </div>

            <div class="form-group">
                <label for="Secteur d'activité">Secteur d'activité</label>
                <input type="text" class="form-control" name="Secteur" id="Secteur d'activité" ">
            </div>
            <div class="form-group">
                <label for="NbStagiaire">Nombre de stagiaire</label>
                <input type="number" name="Nbstagiaire" class="form-control" id="NbStagiaire" >
            </div>
            <label for="Note1">Evaluation des stagiaire</stagiaire></label>
            1 <input type = "radio" id="Note1" name = "sat1" value = "1">
            2 <input type = "radio" id="Note1" name = "sat1" value = "2">
            3 <input type = "radio" id="Note1" name = "sat1" value = "3">
            4 <input type = "radio" id="Note1" name = "sat1" value = "4">
            5 <input type = "radio" id="Note1" name = "sat1" value = "5">

            <label for="Note2">Confiance du pilote</label>
            1 <input type = "radio" id="Note2" name = "sat2" value = "1">
            2 <input type = "radio" id="Note2" name = "sat2" value = "2">
            3 <input type = "radio" id="Note2" name = "sat2" value = "3">
            4 <input type = "radio" id="Note2" name = "sat2" value = "4">
            5 <input type = "radio" id="Note2" name = "sat2" value = "5">

            <input type="submit" id="submit" name="submit" value="Soumettre">
            <br>


            <p class=" title h2 text-decoration-underline" > Création :</p>

            <div class="form-group">
                <label for="pays">Pays</label>
                <input type="text" name="pays" class="form-control" id="pays" >
            </div>

            <div class="form-group">
                <label for="code">Code postal</label>
                <input type="number" name="code" class="form-control" id="code" >
            </div>

            <div class="form-group">
                <label for="rue">Nom de rue</label>
                <input type="text" name="rue" class="form-control" id="rue" >
            </div>
            <div class="form-group">
                <label for="Nbrue">Numéro du batiment</label>
                <input type="number" name="Nbrue" class="form-control" id="Nbrue" >
            </div>
            <div class="form-group">
                <label for="mail">Adresse mail</label>
                <input type="text" name="mail" class="form-control" id="mail" >
            </div>
            <div class="form-group">
                <label for="ID">ID company</label>
                <input type="number" name="ID" class="form-control" id="ID" >
            </div>
            <br>

            <input type="submit" id="creation" name="creation" value="creation">
        </form>
    </div>
</div>

<?php

if (isset($_GET['creation'])) {

    $nom = $_GET['Nom'];
    $ville = $_GET['Ville'];
    $secteur = $_GET['Secteur'];
    $NbStagiaire = $_GET['Nbstagiaire'];
    $mail = $_GET['mail'];
    $code = $_GET['code'];
    $rue = $_GET['rue'];
    $pays = $_GET['pays'];
    $Nbrue = $_GET['Nbrue'];


    if (isset($_GET['sat1'])) {
        $EvalStagiaire = $_GET['sat1'];
    } else $EvalStagiaire = '';

    if (isset($_GET['sat2'])) {
        $ConfPilote = $_GET['sat2'];
    } else $ConfPilote = '';

    if (!$error) {
        $query = $bdd->prepare("INSERT INTO company(company_name, sector_of_activity, number_of_trainees, mail)values ('$nom','$secteur','$NbStagiaire','$mail');");
        $query->execute();
        $query = $bdd->prepare("SELECT id_company FROM company WHERE company_name = '$nom' AND sector_of_activity = '$secteur' AND number_of_trainees = '$NbStagiaire' AND mail = '$mail' ;");
        $query->execute();
        $query = $bdd->prepare("INSERT INTO location(country, Postal_code, Town, street_name, street_number, id_company)values ('$pays','$code','$ville','$rue','$Nbrue',id_company)");
        $query->execute();
        /*$query = $bdd->prepare("INSERT INTO evaluate(id_company, id_user, evaluation_of_trainees, trust_of_pilot)values (id_company,id_user,'$EvalStagiaire','$ConfPilote');");
        $query->execute();*/

    }
}


if (isset($_GET['submit'])){
    $nom = $_GET['Nom'];
    $ville = $_GET['Ville'];
    $secteur = $_GET['Secteur'];
    $NbStagiaire = $_GET['Nbstagiaire'];


    if (isset($_GET['sat1'])){
        $EvalStagiaire = $_GET['sat1'];
    }
    else $EvalStagiaire ='';

    if (isset($_GET['sat2'])){
        $ConfPilote = $_GET['sat2'];
    }
    else $ConfPilote ='';

    if (!$error) {
        $query = $bdd->prepare("SELECT  company_name, mail, sector_of_activity, number_of_trainees, Town, evaluation_of_trainees, trust_of_pilot FROM company NATURAL JOIN location NATURAL JOIN evaluate WHERE company_name = COALESCE(NULLIF('$nom',''),company_name)  AND Town=COALESCE(NULLIF('$ville',''),Town) AND sector_of_activity=COALESCE(NULLIF('$secteur',''),sector_of_activity) AND number_of_trainees=COALESCE(NULLIF('$NbStagiaire',''),number_of_trainees) AND evaluation_of_trainees=COALESCE(NULLIF('$EvalStagiaire',''),evaluation_of_trainees) AND trust_of_pilot=COALESCE(NULLIF('$ConfPilote',''),trust_of_pilot);");
        $query->execute();
        $resultsub = $query->fetchALL(PDO::FETCH_OBJ);
    }


    ?>

    <div class="entreprise">

        <div class="container-fluid">
            <?php foreach ($resultsub as $a) : ?>
                <div class="row border border-dark border-2">
                    <div class="col-5 border-end border-dark border-2">
                        <p class=" title h2 text-decoration-underline" > Entreprise : <?= $a->company_name ?> </p>
                        <article class="textnormale h5">
                            <h5>Secteur d'activité : <?= $a->sector_of_activity ?></h5>
                            <h5>Ville : <?= $a->Town ?></h5>

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
                            <h5>Nombre de stagaire déja embauché : <?= $a->number_of_trainees ?></h5>
                            <h5>Note des stagiaire : <?= $a->evaluation_of_trainees ?>/5</h5>
                            <div id="blocktxt1">
                                <h5>Confiance du pilote de promotion : <?= $a->trust_of_pilot ?></h5>
                                <h5>Adresse mail : <?= $a->mail?></h5>
                            </div>
                        </article>
                    </div>
                </div>
                <br>
            <?php endforeach; ?>
        </div>
    </div>


    <?php
}
else{
    ?>
    <div class="entreprise">

        <div class="container-fluid">
            <?php foreach ($results as $e) : ?>
                <div class="row border border-dark border-2">
                    <div class="col-5 border-end border-dark border-2">
                        <p class=" title h2 text-decoration-underline" > Entreprise : <?= $e->company_name ?> </p>
                        <article class="textnormale h5">
                            <h5>Secteur d'activité : <?= $e->sector_of_activity ?></h5>
                            <h5>Ville : <?= $e->Town ?></h5>

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
                            <h5>Nombre de stagaire déja embauché : <?= $e->number_of_trainees ?></h5>
                            <h5>Note des stagiaire : <?= $e->evaluation_of_trainees ?>/5</h5>
                            <div id="blocktxt1">
                                <h5>Confiance du pilote de promotion : <?= $e->trust_of_pilot ?></h5>
                                <h5>Adresse mail : <?= $e->mail?></h5>
                            </div>
                        </article>
                    </div>
                </div>
                <br>
            <?php endforeach; ?>
        </div>
    </div>

    <?php
}
?>





<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



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
