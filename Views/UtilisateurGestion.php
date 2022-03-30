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
    <script src="/Public/js/UtilisateurGestion.js"> </script>
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
        <form action="/Controllers/ControllerGestionUtilisateur.php" method="post">
            <fieldset>


                <label>Nom de l'étudiant</label>
                <input id="NomEtudiant" name="nom" type="text" class="form-control" placeholder="RIGOT" form-group">
                <label>Prénom de l'étudiant</label>
                <input id="PrenomEtudiant" name="prenom" type="text" class="form-control" placeholder="Jane" onkeypress="verifierCaracteres(event); return false;>
                    <div class="form-group">

                <label for="Role">Role</label>
                <input id="Role" name="role" class="form-control">
               <div class="form-group">
                    <label for="Etablissement">Etablisement</label>
                    <input id="Etablissement" name="centre" class="form-control">


                </div>
                <div class="form-group">
                    <label for="Promotion">Promotion</label>
                    <select id="Promotion" name="promo" class="form-control">
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
                    <input id="Identifiant" name="login" type="text" class="form-control" placeholder="J.Rigot" onkeypress="verifierCaracteres(event); return false;>
                    </div>

                    <div class="form-group">
                    <label for="Mot de passe">Mot de passe</label>
                    <input id="MotDePasse" name="pwd" type="text" class="form-control" placeholder="cesi1234" onkeypress="verifierCaracteres(event)"; return false;>
                </div>
                <button id="BoutonSoumettre" name="soumettre" type="submit" class="btn btn-lg btn-secondary">Soumettre</button>
    </div>
    </fieldset>
    </form>
</div>
</div>

<div class="container" id="MegaBox">
    <div class="row">
        <div id="titreUser" class="col-md-12 border border-dark">
            <h3>Utilisateur </h3>
        </div>



        <div class="col-md-12 border border-top-0 border-dark">
            <div id="box">
                <div class="row">
                    <div class="col-6 col-md-4">Nom :</div>
                    <div class="col-6 col-md-4"></div>
                    <div class="col-6 col-md-4">Promotion :</div>

                    <div class="col-6 col-md-4"><input id="NomUser" name="NomUser" type="text" class="form-control" placeholder="" value=""></div>
                    <div class="col-6 col-md-4"></div>
                    <div class="col-6 col-md-4">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" name="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <label>Liste de choix...</label>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" href="#">A1</a></li>
                                <li><a class="dropdown-item" href="#">A2</a></li>
                                <li><a class="dropdown-item" href="#">A3</a></li>
                                <li><a class="dropdown-item" href="#">A4</a></li>
                                <li><a class="dropdown-item" href="#">A5</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-6 col-md-4">Prénom :</div>
                    <div class="col-6 col-md-4"></div>
                    <div class="col-6 col-md-4">Identifiant :</div>

                    <div class="col-6 col-md-4"><input id="PrenomUser" name="PrenomUser" type="text" class="form-control" placeholder="" value="" ></div>
                    <div class="col-6 col-md-4"></div>
                    <div class="col-6 col-md-4"><input id="IdUser" name="IdUser" type="text" class="form-control" placeholder="" value=""></div>

                    <div class="col-6 col-md-4">Etablissement :</div>
                    <div class="col-6 col-md-4"></div>
                    <div class="col-6 col-md-4">Mot de passe :</div>

                    <div class="col-6 col-md-4">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" name="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <label>Liste de choix...</label>
                            </button>
                            <ul class="dropdown-menu" id="DropdownMenu" aria-labelledby="btnGroupDrop1" name="centre">
                                <li><a class="dropdown-item" href="#">Strasbourg</a></li>
                                <li><a class="dropdown-item" href="#">Nancy</a></li>
                                <li><a class="dropdown-item" href="#">Paris</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-4"></div>
                    <div class="col-6 col-md-4"><input id="MdpUser" name="MdpUser" type="text" class="form-control" placeholder="" value=""></div>

                    <div class="col-6 col-md-4">Rôle :</div>
                    <div class="col-6 col-md-4"></div>
                    <div class="col-6 col-md-4">Permission :</div>

                    <div class="col-6 col-md-4"><input id="roleUser" name="roleUser" type="text" class="form-control" placeholder="" value=""></div>
                    <div class="col-6 col-md-4"></div>
                    <div class="col-6 col-md-4"><input id="permission" name="permission" type="text" class="form-control" placeholder="" value=""></div>
                    <br><br><br>

                    <div id="button1" class="col-6 col-md-4"><button id="BoutonValider" name="BoutonValider" type="button" class="btn btn-lg btn-secondary">Valider la modification</button></div>
                    <div id="button2" class="col-6 col-md-4"><button id="BoutonCreer" name="BoutonCreer" type="button" class="btn btn-lg btn-secondary">Créer un nouvel étudiant</button></div>
                    <div id="button3" class="col-6 col-md-4"><button id="BoutonSupr" name="BoutonSupr" type="button" class="btn btn-lg btn-secondary">Supprimer</button></div>
                    <br>
                </div>
            </div>



            <div id="box2" class="col-md-12 border-top border-dark">
                <h3>Statistique</h3><br>
                <p>Etat de la fiche de validation :<br><br> Etat de la fiche de stage :</p>
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