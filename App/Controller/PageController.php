<?php

namespace App\Controller;

class PageController extends Controller
{
    public function route():void 
    {
        try{
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
                        $this->home();
                        break;
                    default:
                        throw new \Exception('Cette action n\'existe pas : '.$_GET['action']);
                }
            } else {
               throw new \Exception('Aucune action définie');
            }
        }
        catch(\Exception $e){
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }
        
    }

    protected function about()
    {
        /*
            On passe en premier paramètre la page à charger
            et en deuxième un tableau associatif de paramètres
        */
        $this->render('page/about_us', [
            'test' => 'abc',
            'test2' => 'def'
       ]);
       
    }

    protected function home()
    {
        $this->render('page/home', [
            
       ]);
       
    }
}