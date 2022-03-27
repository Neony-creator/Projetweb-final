<?php
require('chaineconnexion.php');


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
}

if (isset($_POST['email'])){
    $bonjours=$_POST['email'];
}
else {
    $bonjours='b';
}
echo $bonjours;
?>
<script>
    console.log('<?php echo $bonjours;?>');
</script>

<?php
if(isset($_POST['envoi'])){ // si formulaire soumis
    echo $_POST['password'];
    echo "bonjour";
}
?>