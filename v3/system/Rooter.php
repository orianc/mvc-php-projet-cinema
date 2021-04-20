<?php
namespace system;

use app\controllers\Home;
use app\models\Home as ModelsHome;
use system\lib\Util;

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
            require PATH_ROOT."/controllers/home.php";
            $controller=new Home();
            $controller->index();
            exit;
        }
        
        #-- 2
        
        $url = rtrim( $_GET['url'],'/');
        $url = explode('/',$url);
        Util::dd($url);
        
        #-- 3
        
        
        $controllerName = array_shift($url);
        $file = PATH_ROOT."controllers/". $controllerName .".php";
        
        if( file_exists($file)){
            require PATH_ROOT."controllers/".$controllerName.".php";
            $controllerName = ucfirst($controllerName);
            $controller = new $controllerName;
        }else{
            // require PATH_ROOT."controllers/error.php";
            // $controller = new Home();
            // $controller‐>index();
            // exit;
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