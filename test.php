<?php


class Vehicule
{
    protected string $marque;
    protected float $vitesse_max;
}


class Voiture extends Vehicule
{

    protected int $nombre_roues;
}


class Bateau extends Vehicule
{
    protected int $nombre_cabines;
}
