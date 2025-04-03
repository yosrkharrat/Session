<?php
 class Compteur{
    private $fp;
    private $nbr;
    public function __construct($fichier){
        $this->fp = fopen($fichier, "c+");
       
        $this->nbr = fgets($this->fp);
    }
    public function inc(){
        $this->nbr++;
        fseek($this->fp, 0);
        fputs($this->fp, $this->nbr);
    }
    public function afficher(){
        if ($this->nbr == 0){
            echo "Bienvenu à notre
plateforme.";
        }
        else{
            echo "Merci pour votre fidélité,c’est votre $this->nbr éme visite.";
        }
    }
 }
?>