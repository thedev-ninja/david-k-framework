<?php

require 'config.php';
require 'AltoRouter/AltoRouter.php';

?>
<?php

function camelize($string, $ucfirst=true){
    $camelcase = preg_replace_callback('/(^|_)([a-z])/', function($m){
        return strtoupper($m[2]);
    }, $string);
    return $ucfirst ? $camelcase : lcfirst($camelcase);
}

class Dispatcher{

    public $router;

    public function __construct(){
        $this->router = new AltoRouter();
        $this->router->setBasePath(PROJECT_URIPATH);
        $this->router->map('GET|POST', '/', 'website#index', 'home'); //will route to this path when 'home' is named with generate method
        $this->router->map('GET','/app/[i:appid]/', 'app#index', 'app_home'); //will route to this path when 'app-home' is named with generate method. TRAILING SLASH ADDED BECAUSE /app/ID redirectors to /app/ID/ because it is a valid directory path. THIS BEHAVIOR CAN BE CHANGED WITH .HTACCESS mod_rewrite rules
        $this->router->map('GET','/app/[i:appid]/home', 'app#index', 'app_returnhome'); 
        $this->router->map('GET','/app/[i:appid]/traffic', 'app#traffic', 'app_traffic'); 


        $this->router->map('GET','/app/[i:appid]/listings/', 'listings#list', 'app_listings'); 
        $this->router->map('GET','/app/[i:appid]/listings/companies/', 'listings#companies', 'company_listings'); 
        $this->router->map('GET','/app/[i:appid]/listings/individuals/', 'listings#individuals', 'individual_listings'); 

        $this->router->map('GET|POST', '/api/listings/', 'api#list');
        $this->router->map('GET|POST', '/api/listings/companies/', 'api#companies');
        $this->router->map('GET|POST', '/api/listings/individuals/', 'api#individuals');

        $this->router->map('GET','/users/', array('c' => 'UserController', 'a' => 'ListAction'));
        $this->router->map('GET','/users/[i:id]', 'users#show', 'users_show');
        $this->router->map('POST','/users/[i:id]/[delete|update:action]', 'users#do', 'users_do');
    }

    public function dispatch(){
        if ($this->getRoute() === false) {
            echo "404";
        }else{        
            $route = $this->getRoute();
            $controller = $this->getController($route['target']);
            $action = $this->getAction($route['target']);
            $controller->beforeHook($route['params']);
            call_user_func(array($controller, $action), $route['params']);
            $controller->afterHook();
        }
    }

    public function getRoute(){
        $route = $this->router->match();
        return $route;
    }

    public function getController($target){
        list($controller, $action) = explode('#', $target);
        $controller = camelize($controller);
        $controller_class =  "{$controller}Controller";
        return new $controller_class();
    }

    public function getAction($target){
        list($controller, $action) = explode('#', $target);
        $action = camelize($action, false);
        return "{$action}Action";
    }

}

require 'controllers.php';

$dispatcher = new Dispatcher;

$dispatcher->dispatch();

?>

