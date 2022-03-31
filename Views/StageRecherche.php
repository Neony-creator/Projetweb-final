<!doctype html>
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
    $query = $bdd->prepare('SELECT  name_offer,company_name,skills, mail, description, sector_of_activity, number_of_trainees, Town, evaluation_of_trainees, internship_duration, start_date, remuneration_basis, number_of_places_offered, evaluation_of_trainees FROM offer NATURAL JOIN location NATURAL JOIN evaluate NATURAL JOIN company;');
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
    <link rel="stylesheet" href="/Public/css/stage_recherche.css" />

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
        <h1>Cesi ton stage</h1>
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
                            <a class="nav-link" href="EntrepriseRecherche.php">Entreprise</a>
                        </li>
                        <li class="nav-item" style="padding-right : 2em;">
                            <a class="nav-link" href="StageRecherche.php">Stage</a>
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

<div class="recherche">
    <div class="container">
        <h2>Rechercher</h2>
        <form>
            <form action=StageRecherche.php method="get">
                <fieldset>


                    <div class="form-group">
                        <label for="Nom">Nom du stage</label>
                        <input type="text" class="form-control" id="Nom" name='Nom' placeholder="Stage web design">
                    </div>

                    <div class="form-group">
                        <label for="Nom de l'entreprise">Nom de l'entreprise</label>
                        <input type="text" class="form-control" id="Nom de l'entreprise" name='NomE' placeholder="CESI">
                    </div>

                    <div class="form-group">
                        <label for="Secteur d'activité">Secteur d'activité</label>
                        <input type="text" class="form-control" name="Secteur" id="Secteur d'activité" ">
                    </div>

                    <div class="form-group">
                        <label for="Ville">Ville</label>
                        <input type="number" class="form-control" id="Ville" name='Ville' placeholder="Strasbourg">
                    </div>
                    <div class="form-group">
                        <label for="Durée">Durée du stage</label>
                        <select id="Durée" name='Durée' class="form-control">
                            <option value="">Liste de choix...</option>
                            <option value="">1 mois</option>
                            <option value="">2 mois</option>
                            <option value="">3 mois</option>
                            <option value="">4 mois</option>
                            <option value="">5 mois</option>
                            <option value="">6 mois</option>
                            <option value="">1 an</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Date de début">Date de début</label>
                        <input type="text" class="form-control" id="Date de début" NAME="Ddébut" placeholder="04/04/2022">
                    </div>
                    <div class="form-group">
                        <label for="Rémunération">Rémunération(€/mois)</label>
                        <input type="number" class="form-control" id="Rémunération" name='Rémunération' placeholder="1200">
                    </div>
                    <div class="form-group">
                        <label for="Place">Nombre de place offerte</label>
                        <input type="number" class="form-control" id="Place" name="NBplace" placeholder="2">
                    </div>

                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <label for="Note1">Evaluation des stagiaire</stagiaire></label>
                    1  <input type = "radio" id="Note1" name = "sat1" value = "1">
                    2  <input type = "radio" id="Note1" name = "sat1" value = "2">
                    3  <input type = "radio" id="Note1" name = "sat1" value = "3">
                    4  <input type = "radio" id="Note1" name = "sat1" value = "4">
                    5  <input type = "radio" id="Note1" name = "sat1" value = "5">


                    <input type="submit" id="submit" name="submit" value="Soumettre">

                </fieldset>
            </form>
    </div>
</div>

<?php
if (isset($_GET['submit'])){
    $nom = $_GET['Nom'];
    $nomE = $_GET['NomE'];
    $ville = $_GET['Ville'];
    $secteur = $_GET['Secteur'];
    $duree = $_GET['Durée'];

    $dateDebut = $_GET['Ddébut'];
    $Remuneration = $_GET['Rémunération'];
    $NBplace = $_GET['NBplace'];
    if (isset($_GET['sat1'])){
        $EvalStagiaire = $_GET['sat1'];
    }
    else $EvalStagiaire ='';


    if (!$error) {
        $query = $bdd->prepare("SELECT  name_offer,company_name,skills, mail, description, sector_of_activity, number_of_trainees, Town, evaluation_of_trainees, internship_duration, start_date, remuneration_basis, number_of_places_offered, evaluation_of_trainees FROM offer NATURAL JOIN location NATURAL JOIN evaluate NATURAL JOIN company WHERE name_offer=COALESCE(NULLIF('$nom',''),name_offer) AND company_name=COALESCE(NULLIF('$nomE',''),company_name) AND Town=COALESCE(NULLIF('$ville',''),Town) AND sector_of_activity=COALESCE(NULLIF('$secteur',''),sector_of_activity) AND internship_duration=COALESCE(NULLIF('$duree',''),internship_duration) AND start_date=COALESCE(NULLIF('$dateDebut',''),start_date) AND remuneration_basis=COALESCE(NULLIF('$Remuneration',''),remuneration_basis) AND number_of_places_offered=COALESCE(NULLIF('$NBplace',''),number_of_places_offered) AND evaluation_of_trainees=COALESCE(NULLIF('$EvalStagiaire',''),evaluation_of_trainees)");
        $query->execute();
        $resultsub = $query->fetchALL(PDO::FETCH_OBJ);
    }
    ?>
    <div class="stage">

        <div class="container-fluid">
            <?php foreach ($resultsub as $e) : ?>
                <div class="row border border-dark border-2">
                    <div class="col-5 border-end border-dark border-2">
                        <p class=" title h1 text-decoration-underline" > Stage: <?= $e->name_offer  ?></p>
                        <article class="textnormale h5">
                            <h5>Entreprise : <?= $e->company_name ?></h5>
                            <h5>Compétence: <?= $e->skills ?></h5>
                            <h5>Note de l'entreprise : <?= $e->evaluation_of_trainees ?>/5</h5>
                            <div id="blocktxt1">
                                <h5>Secteur d'activité: <?= $e->sector_of_activity ?></h5>
                            </div>
                            <h5>Ville : <?= $e->Town ?></h5>
                            <h5>Durée du stage : <?= $e->internship_duration  ?></h5>
                            <h5>Date de début : <?= $e->start_date  ?></h5>
                            <h5>Base de rémunération <?= $e->remuneration_basis ?></h5>
                            <h5>Nombre de places offertes : <?= $e->number_of_places_offered  ?></h5>
                        </article>
                    </div>
                    <div class="col-lg-6 bor ">
                        <article class="textnormale h5 lh-base">
                            <br>
                            <p class=" title h2 text-decoration-underline" > En quoi consiste le stage:</p>
                            <div id="title2"> <h5><?= $e-> description ?>.</h5> </div>

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
    <div class="stage">

        <div class="container-fluid">
            <?php foreach ($results as $a) : ?>
                <div class="row border border-dark border-2">
                    <div class="col-5 border-end border-dark border-2">
                        <p class=" title h1 text-decoration-underline" > Stage: <?= $a->name_offer  ?></p>
                        <article class="textnormale h5">
                            <h5>Entreprise : <?= $a->company_name ?></h5>
                            <h5>Compétence: <?= $a->skills ?></h5>
                            <h5>Note de l'entreprise : <?= $a->evaluation_of_trainees ?>/5</h5>
                            <div id="blocktxt1">
                                <h5>Secteur d'activité: <?= $a->sector_of_activity ?></h5>
                            </div>
                            <h5>Ville : <?= $a->Town ?></h5>
                            <h5>Durée du stage : <?= $a->internship_duration  ?></h5>
                            <h5>Date de début : <?= $a->start_date  ?></h5>
                            <h5>Base de rémunération <?= $a->remuneration_basis ?></h5>
                            <h5>Nombre de places offertes : <?= $a->number_of_places_offered  ?></h5>
                        </article>
                    </div>
                    <div class="col-lg-6 bor ">
                        <article class="textnormale h5 lh-base">
                            <br>
                            <p class=" title h2 text-decoration-underline" > En quoi consiste le stage:</p>
                            <div id="title2"> <h5><?= $a-> description ?>.</h5> </div>

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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



</body>

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
