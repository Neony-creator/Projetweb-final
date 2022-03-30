{*Smarty*}

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/Public/css/accueil.css" />
    <title>PROJET WEB, groupe 4</title>
</head>

{block name=body}
{include "C:/Users/pclau/IdeaProjects/Projetweb-final/Controllers/tpl/header.tpl"}
<body>

<!-- Body -->


<body>
<div class="container">
    <div class="row">
        <!-- Image 1 -->
        <div id="image1" class="col-sm">
            <img src="/Public/file/ex.png" alt="image stage" title="Qu'est ce qu'il est beau quand même !"/>
        </div>
        <!-- texte -->
        <div class="col-sm">
            <div id="coltxt">
                <h1>  Entreprise ou étudiant? <br>Tout pout vous mettre en contact.</h1>

                <p>Lorem ipsum dolor sit amet. Aut modi maxime qui accusantium quis sit animi tempore et dolor tempora. Qui maxime libero qui harum minus et voluptatem amet rem voluptas dolor At facere dolore qui voluptatem quis ea consequatur illo. Id ullam voluptatem ut laborum modi sed provident illo quo porro nesciunt ab fugiat ipsam? Aut dolores saepe est suscipit enim vel voluptates nisi.Ut architecto dolorem quo quos itaque vel velit dolores ut reiciendis illo et voluptatem unde id provident earum? Et alias quos sed consectetur molestiae 33 porro illum. Ut facilis quia qui asperiores fugit est unde nesciunt. Qui quos magnam illum exercitationem est commodi iusto aut alias autem aut sint laudantium et sapiente libero.</p>
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
{include "C:/www/smarty/tpl/footer.tpl"}
{/block}
</body>
</html>