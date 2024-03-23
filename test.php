<?php

interface IVehicule {
    public function Accélérer();
    public function Freiner();
}

class Vehicule implements IVehicule {
    protected string $marque;
    protected float $vitesse_max;

    public function Accélérer() {
        echo "Le véhicule accélère";
    }

    public function Freiner() {
        echo "Le véhicule freine";
    }
}

class Voiture extends Vehicule {
    protected int $nombre_roues;
}

class Bateau extends Vehicule {
    protected int $nombre_cabines;
}