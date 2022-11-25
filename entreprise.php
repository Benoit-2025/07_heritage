<?php 

/**
 * Dans sa BDD l'entreprise stock des  informations de personnes: 
 * 
 *       Employer
 *       Clients
 *       Premium
 * 
 * personne
 *     
 *      -Nom
 *      -Prenom
 *      -age
 * 
 * 
 * 
 * Employeur  extends Personne
 * 
 *    service
 *    salaire
 * 
 * 
 * 
 *  Client extends Personne 
 * 
 *     email
 *     adresse
 *     numeroClient
 * 
 * 
 *   Premium extends Client
 * 
 * 
 *     reduction
 */

class Personne {
    protected $nom;
    protected $prenom;
    protected $age;

    public function __construct($nom, $prenom, $age){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;

    }

    public function identite()
    {
      return "nom : $this->nom <br>
             prenom : $this->prenom <br>
             age : $this->age <br>";
    }



}

class Employe extends Personne {
     
    private $service;
    private $salaire;

    public function __construct($nom, $prenom, $age, $service, $salaire)
    {

        parent::__construct($nom, $prenom, $age);
        $this->service = $service;
        $this->salaire = $salaire;
        
    }

    public function identite(){
      // parent::identite();
        return parent::identite() . "Service : $this->service <br>
                salaire : $this->salaire <br> " ;
    }

}

class Client extends Personne {

    protected $email ;
    protected $adresse ;
    protected $numeroClient ;

    public function __construct($nom, $prenom, $age, $email, $adresse, $numeroClient)
    {
        parent::__construct($nom, $prenom, $age);
        $this->email = $email ;
        $this->adresse = $adresse ;
        $this->numeroClient = $numeroClient ;
    }

    public function identite()
    {
        return parent::identite() . "Numero Client : $this->numeroClient <br>
                                     Email : $this->email <br>
                                     Adresse : $this->adresse <br>";
    }


    
    
    

}

class Premium extends Client {

    private $reduction ;
    

    public function __construct($nom, $prenom, $age, $email, $adresse, $numeroClient)
    {
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->age = $age ;
    }
}







$employe = new Employe('Assam','Benoit',25,'informatique', 3000);

echo $employe->identite();

$client = new Client('Ateur','Nordine', 32, "abenoit237@yahoo.com"," 12 rue de la Fosse Bazin","12345678910");
echo $client->identite();
?>