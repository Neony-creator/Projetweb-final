<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/Public/css/utilisateur_gestion.css" />
    <link rel="stylesheet" href="/Public/fontawesome/css/all.min.css">
    <title>Utilisateur - PROJET WEB</title>
</head>

<section class="top">
    <!-- Logo -->
    <div id="logo">
        <p> <img src="/Public/file/logo.png" alt="logo cesi" title="Qu'est ce qu'il est beau quand même ! "/> </p>
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
                    <label for="Role">Role</label>
                    <select id="Role" class="form-control">
                        <option value="">Liste de choix...</option>
                        <option value="">Pilote</option>
                        <option value="">Delegue</option>
                        <option value="">Etudiant</option>
                    </select>
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
        <tr class="n">
            <td colspan="2"><h3>Utilisateur</h3></td>
            <form>
        <tr class="n">
            <td colspan="2">
                <label for = "Nom" class="gauche"> Nom </label>
                <label for = "Promotion" class="droite"> Promotion </label><br/>
                <input class="g" type="text" id="Nom" name="nom" required minlength="4" maxlength="8" size="10"/>
                <select class="d" id="Promotion" class="form-control">
                    <option value="">Liste de choix...</option>
                    <option value="">A1</option>
                    <option value="">A2</option>
                    <option value="">A3</option>
                    <option value="">A4</option>
                    <option value="">A5</option>
                </select><br/>
                <label class="gauche"> Prenom </label>
                <label class="droitee"> Identifiant </label><br/>
                <input class="g" type="text" id="prenom" name="prenom" required minlength="4" maxlength="8" size="10"/>
                <input class="d" type="text" id="identifiant" name="identifiant" required minlength="4" maxlength="8" size="10"/><br/>
                <label class="gauche"> Etablisement </label>
                <label class="droiteee"> Mot de passe </label><br/>
                <select class="g" id="Etablissement" class="form-control">
                    <option value="">Liste de choix...</option>
                    <option value="">Strasbourg</option>
                    <option value="">Nancy</option>
                    <option value="">Paris</option>
                </select>
                <input class="dd" type="text" id="motdepasse" name="motdepasse" required minlength="4" maxlength="8" size="10"/><br/>
                <input class="valider" type="submit" value="Valider la modification" >
                <input class="creer" type="submit" value="Creer un nouvel etudiant" >
                <input class="supprimer" type="submit" value="Supprimer" >
            </td>
        </tr>
        <tr class="n">
            <td colspan="2"><h3>Statistique</h3><br>
                Etat de la fiche de validation :<br><br> Etat de la fiche de stage :</td>
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