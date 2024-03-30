<?php

namespace App\Controller;

Class Controller{
    public function route():void 
    {
        try{
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
                        $pageController = new BookController();
                        $pageController->route();
                        break;
                    default:
                        throw new \Exception('Le controlleur n\'existe pas');
                }
            } else {
                // charger la page d'accueil si pas de controleur dans l'url
                $pageController = new PageController();
                $pageController->home();
            }
        }
        catch(\Exception $e){
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
            
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
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        
        }
    }
       
}