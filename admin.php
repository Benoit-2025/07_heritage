<?php 


class Utilisateur {
    private $id = 15;
    private $pseudo; 
    private $password;


    public function __construct(){
        echo " Création d'un internaute <br> ";
    }


    public function seConnecte(){








        /**
         * 
         * --TRAITEMENT DESDONNEES
         * --L'INSERTION DANS LA SESSION DE L'UTILISATEUR
         * 
        */
        return "Je me connecte <br> ";

    }

    public function modifieMonProfil(){

        /*
        
        --TRAITEMENT DES DONNEES
        -- LA REQUETE UDATE EN QL
        r

        */
        return "Modidification des données <br>";


    }
}

class Admin extends Utilisateur {
     public function accesBackOffice()
     {
        /**
         * --Verificationdu sta
         * --
         */
        return "Accès autorisé au Back office <br>";
     }
}

$admin = new Admin();
echo $admin->seConnecte();
echo $admin->accesBackOffice();


$user = new Utilisateur();



?>