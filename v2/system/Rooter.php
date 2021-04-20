<?php
namespace system;

class Router {
    
    
    /**
     * 1. controller par defaut
     * 2. nettoyage de l'url
     * 3. gestion controller
     * 4. gestion méthodes
     * 5. gestion paramètres
     */
        
        
     public static function run(){
         
        #-- 1
         
        if(empty($_GET['url'])){
            require BASE_APP."controllers/accueil.php";
            $controller=new Accueil();
            $controller->index();
            exit;
        }
        
        #-- 2
        
        $url = rtrim( $_GET['url'],'/');
        $url = explode('/',$url);
        
        
        #-- 3
        
        
        $controllerName = array_shift($url);
        $file = BASE_APP."controllers/". $controllerName .".php";
        
        if( file_exists($file)){
            require BASE_APP."controllers/".$controllerName.".php";
            $controllerName = ucfirst($controllerName);
            $controller = new $controllerName;
        }else{
            require BASE_APP."controllers/error.php";
            $controller = new Error();
            $controller‐>index();
            exit;
        }
         
        #-- 4
         
        if(isset($url[0])){
            $methodName = array_shift($url);
            $method = method_exists($controller, $methodName ) ? $methodName : 'index';
        }else{
            $method = 'index';
        }
        
        #-- 5
        
        $params = !empty($url) ? array_values($url) : [] ;
        call_user_func_array([$controller,$method],$params );
        
     }
     
}