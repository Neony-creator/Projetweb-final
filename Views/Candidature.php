<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/Public/css/candidature.css" />
    <link rel="stylesheet" href="/Public/fontawesome/css/all.min.css">
    <title>Etudiant - PROJET WEB</title>
</head>

<section class="top">
    <!-- Logo -->
    <div id="logo">
        <p> <img src="/Public/file/logo.png" alt="logo cesi" title="Qu'est ce qu'il est beau quand même ! "/> </p>
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
<div class="recherche">
    <div class="container">
        <h2>Rechercher</h2>
        <form>
            <fieldset>


                <div class="form-group">
                    <label for="Nom de l'étudiant">Nom de l'étudiant</label>
                    <input type="text" class="form-control" id="Nom de l'étudiant" placeholder="RIGOT">
                </div>

                <div class="form-group">
                    <label for="Prénom de l'etudiant">Prénom de l'étudiant</label>
                    <input type="text" class="form-control" id="Prénom de l'etudiant" placeholder="Jane">
                </div>

                <div class="form-group">
                    <label for="Etablissement">Etablisement</label>
                    <select id="Etablissement" class="form-control">
                        <option value="">Liste de choix...</option>
                        <option value="">Strasbourg</option>
                        <option value="">Nancy</option>
                        <option value="">Paris</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="Promotion">Promotion</label>
                    <select id="Promotion" class="form-control">
                        <option value="">Liste de choix...</option>
                        <option value="">A1</option>
                        <option value="">A2</option>
                        <option value="">A3</option>
                        <option value="">A4</option>
                        <option value="">A5</option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="Identifiant">Identifiant</label>
                    <input type="text" class="form-control" id="Identifiant" placeholder="J.Rigot">
                </div>

                <div class="form-group">
                    <label for="Mot de passe">Mot de passe</label>
                    <input type="text" class="form-control" id="Mot de passe" placeholder="cesi1234">
                </div>




                <br>
                <input type="submit" id="submit" value="Soumettre">

            </fieldset>
        </form>
    </div>
</div>

<div class="bubble">
    <table>
        <tr class="noir">
            <td colspan="2"><h3>Candidature de :</h3> </td>
            <form>
        <tr class="noir">
            <td colspan="2"><label> A envoyer une demande a :</label><br/> Reponse positive <input type="radio" name = "a" value ="Reponse positive" /> Reponse negative <input type="radio" name = "a" value ="Reponse negative" /></td>
        </tr>
        <tr class="noir">
            <td colspan="2"><label> Une fiche de validation a ete emise par l'entreprise :</label><br/> Oui <input type="radio" name = "b" value="Oui"/> Non <input type="radio" name = "b" value="Non"/></td>
        </tr>
        <tr class="noir">
            <td colspan="2"><label> La fiche de validation a ete signe :</label><br/> Oui <input type="radio" name = "c" value="Oui"/> Non <input type="radio" name = "c" value="Non"/></td>
        </tr>
        <tr class="noir">
            <td colspan="2"><label> La convention de stage a ete envoyee :</label><br/> Oui <input type="radio" name = "d" value="Oui"/> Non <input type="radio" name = "d" value="Non"/></td>
        </tr>
        <tr class="noir">
            <td colspan="2"><label> La convention de stage a ete retounee signees par l'entreprise :</label><br/> Oui <input type="radio" name = "e" value="Oui"/> Non <input type="radio" name = "e" value="Non"/></td>
        </tr>
        <tr class="transparent">
            <td colspan="2"><input class="valider" type="submit" value="Valider" >
        </tr>
        </form>
        </tr>
    </table>
    <br/>
</div>


<!-- Bootstrap Bundle with Popper -->
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
