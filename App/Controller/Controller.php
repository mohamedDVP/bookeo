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
                    $pageController = new PageController();
                    $pageController->route();
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

    protected function render(string $path, array $params = []): void
    {
        $filePath = _ROOTPATH_.'/templates/'.$path.'.php';
        try {
            if(!file_exists($filePath)){
                throw new \Exception(' fichier non trouvé : '.$filePath);
            } else {
                // extract permet de transformer les clés d'un tableau en variables
                extract($params);
                require_once $filePath;
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        
        }
    }
       
}