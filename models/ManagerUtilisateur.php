<?php

require_once('ManagerBdd.php');


class ManagerUtilisateur extends ManagerBdd
{
    private  $prenom;
    private  $nom;
    private  $centre;
    private  $login;
    private  $pwd;
    private  $role;
    private  $perm;
    private  $promo;

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getCentre(): string
    {
        return $this->centre;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getPwd(): string
    {
        return $this->pwd;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function getPerm(): string
    {
        return $this->perm;
    }

    public function getPromo(): string
    {
        return $this->promo;
    }

    Public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setCentre($centre)
    {
        $this->centre = $centre;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function setPerm($perm)
    {
        $this->perm = $perm;
    }

    public function setPromo($promo)
    {
        $this->promo = $promo;
    }

    public function afficherUtilisateur(){
        echo "Prenom : ".$this->getPrenom()."<br>";
        echo "Nom : ".$this->getNom()."<br>";
        echo "Centre : ".$this->getCentre()."<br>";
        echo "Login : ".$this->getLogin()."<br>";
        echo "Pwd : ".$this->getPwd()."<br>";
        echo "Role : ".$this->getRole()."<br>";
        echo "Perm : ".$this->getPerm()."<br>";
        echo "Promo : ".$this->getPromo()."<br>";
    }







    public function GetUtilisateur()
    {
        $bdd = self::bdd();
        $query = $bdd->prepare("SELECT first_name, user_name, facility, login, password, roles, permission, promotion from users 
        NATURAL join supervised NATURAL join promotion NATURAL join define NATURAL join roles where first_name=COALESCE(NULLIF('$this->prenom',''),first_name) and user_name = COALESCE(NULLIF('$this->nom',''),user_name) 
        and facility = COALESCE(NULLIF('$this->centre',''),facility) and login = COALESCE(NULLIF('$this->login',''),
        login) and password = COALESCE(NULLIF('$this->pwd',''),password) and roles = COALESCE(NULLIF('$this->role',''),roles) 
        and permission = COALESCE(NULLIF('$this->perm',''),permission) and promotion = COALESCE(NULLIF('$this->promo',''),promotion)");

        $query->execute();

        $results = $query->fetchAll(PDO::FETCH_OBJ);
        return $results;

    }

}

/*$a = new ManagerUtilisateur();
$a=$a->GetUtilisateur();
foreach ($a as $bb){
echo $bb->first_name;
echo $bb->password;}*/



//session_start();
//require_once('ManagerBdd.php');


//class ManagerLogin extends ManagerBdd
//{
//    public function getLog()
//    {
//        $hash = $_SESSION['hash'];
//        $login = $_SESSION['login'];
//        $bdd = self::bdd();
//
//        $query = $bdd->prepare("SELECT password, login FROM users where password= '$hash' and login='$login'");
//        $query->execute();
//
//        $results = $query->fetchALL(PDO::FETCH_OBJ);
// SELECT first_name, user_name, facility, login, password, roles, permission, promotion from users
//        NATURAL join supervised NATURAL join promotion NATURAL join define NATURAL join roles; where first_name=? or user_name=?  or facility=? or
//        login=?or password=? or roles=? or permission=? or promotion=?

//        $query->execute(array($prenom,$nom,$centre,$login,$pwd,$role,$perm,$promo));






