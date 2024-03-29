<?php

namespace App\Controller;

class PageController extends Controller
{
    public function route():void 
    {
        if(isset($_GET['action']))
        {
            switch($_GET['action'])
            {
                case 'about':
                    // appeler la méthode about()
                    $this->about();
                    break;
                case 'home':
                    // appeler la méthode home()
                    var_dump('On appel la méthode home()');
                    break;
                default:
                    // Erreur
            }
        } else {
            // charger la page d'accueil
        }
    }

    protected function about()
    {
        /*
            On passe en premier paramètre la page à charger
            et en deuxième un tableau associatif de paramètres
        */
        $this->render('page/about', [
            'test' => 'abc',
            'test2' => 'def'
       ]);
       
    }
}