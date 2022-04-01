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
    private $id;
    private $roles;

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
        if ($role == "Administrateur")
        {
            $this->roles = "600";
        }
        if ($role == "Pilot")
        {
            $this->roles = "601";
        }
        if ($role == "Delegue")
        {
            $this->roles = "602";
        }
        if ($role == "Etudiant")
        {
            $this->roles = "603";
        }


    }

    public function setPerm($perm)
    {
        $this->perm = $perm;
    }

    public function setPromo($promo)
    {
        $this->promo = $promo;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setPwdHash($psw)
    {
        $this->pwd = password_hash($psw, PASSWORD_DEFAULT);
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
        echo "Id : ".$this->getId()."<br>";
    }







    public function GetUtilisateur()
    {
        $bdd = self::bdd();
        $query = $bdd->prepare("SELECT id_user,first_name, user_name, facility, login, password, roles, permission, promotion, validation_step from users 
        NATURAL join supervised NATURAL join promotion NATURAL join define NATURAL join roles natural join apply 
        where like first_name=COALESCE(NULLIF('$this->prenom%',''),first_name) 
        and user_name = COALESCE(NULLIF('$this->nom',''),user_name) 
        and facility = COALESCE(NULLIF('$this->centre',''),facility) and login = COALESCE(NULLIF('$this->login',''),
        login) and password = COALESCE(NULLIF('$this->pwd',''),password) and roles = COALESCE(NULLIF('$this->role',''),roles) 
        and promotion = COALESCE(NULLIF('$this->promo',''),promotion)");

        $query->execute();

        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;

    }

    public function CreateUtilisateur()
    {
        $bdd = self::bdd();
        $query1 = $bdd->prepare("INSERT INTO `users`( `user_name`, `first_name`, `facility`, `login`, `password`) VALUES ('$this->prenom','$this->nom','$this->centre','$this->login','$this->pwd')");
        $query1->execute();

        $query2 = $bdd->prepare("SELECT `id_user` FROM `users` WHERE user_name=? and first_name=? and facility=? and login=? and password=?");
        $query2->execute(array($this->prenom,$this->nom,$this->centre,$this->login,$this->pwd));
        $uid = $query2->fetch(PDO::FETCH_OBJ);
        $uid = $uid->id_user;
        $query3 = $bdd->prepare("INSERT INTO `define`(`id_user`, `id_role`, `permission`) VALUES ('$uid','$this->roles ','$this->perm')");
        $query3->execute();

    }

    public function UpdateUtilisateur()
    {
        $bdd = self::bdd();
        $query1 = $bdd->prepare("UPDATE `users` SET `user_name`='$this->prenom',`first_name`='$this->nom',`facility`='$this->centre',`login`='$this->login',`password`='$this->pwd' WHERE id_user='$this->id'");
        $query1->execute();

        $query2 = $bdd->prepare("UPDATE `define` SET `id_role`='$this->roles',`permission`='$this->perm' WHERE id_user='$this->id'");
        $query2->execute();

    }

    public function DeleteUtilisateur()
    {
        $bdd = self::bdd();

        $query1 = $bdd->prepare("DELETE FROM `define` WHERE id_user='$this->id'and id_role='$this->roles'");
        $query1->execute();

        $query2 = $bdd->prepare("DELETE FROM `users` WHERE id_user='$this->id'");
        $query2->execute();



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






