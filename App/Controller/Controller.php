<?php

namespace App\Controller;

Class Controller{
    public function route():void 
    {
        if(isset($_GET['controller']))
        {
            switch($_GET['controller'])
            {
                case 'page':
                    // charger le controller Page
                    var_dump('On charge PageController');
                    break;
                case 'book':
                    // charger le controller Book
                    var_dump('On charge BookController');
                    break;
                default:
                    // Erreur
            }
        } else {
            // charger la page d'accueil
        }
    }
}