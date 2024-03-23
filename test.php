<?php

interface IVehicule 
{
    public function Accélérer();
    public function Freiner();
}

trait Moteur{
    function Démarrer():void
    {
        echo "Le moteur démarre";
    }

    function Arrêter():void
    {
        echo "Le moteur s'arrête";
    }
    
}

trait Klaxonne{
    function Klaxonner():void
    {
        echo "Klaxonne!!!";
    }
}

class Vehicule implements IVehicule 
{
    
    protected string $marque;
    protected float $vitesse_max;

    public function __construct(string $marque, float $vitesse_max) {
        $this->marque = $marque;
        $this->setVitesseMax($vitesse_max);
    }

    /**
     * Get the value of vitesse_max
     */
    public function getVitesseMax(): float
    {
        return $this->vitesse_max;
    }

    /**
     * Set the value of vitesse_max
     */
    public function setVitesseMax(float $vitesse_max): self
    {
        if($vitesse_max > 0){
            $this->vitesse_max = $vitesse_max;
        }
        return $this;
    }


    public function Accélérer():void
    {
        echo "Le véhicule accélère";
    }

    public function Freiner():void
    {
        echo "Le véhicule freine";
    }
}

class Voiture extends Vehicule {
    use Moteur, Klaxonne;

    public function Klaxonner():void
    {
        echo "Klaxonne2!!!";
    }
    protected int $nombre_roues;
}

class Bateau extends Vehicule {
    protected int $nombre_cabines;

    
}

$voiture = new Voiture("Toyota", 275, 4);
$voiture->Klaxonner();