<?php
class WebsiteController{

    public function beforeHook($params){
        // some logic here
        // echo 'beforeHook';
    }

    public function afterHook(){
        // some logic here
        // echo 'afterHook';
        $dispatcher = new Dispatcher;
        require "verbose.php";
    }

    public function indexAction($params){
        // Action handling
        // echo 'indexAction'.' '.$params['appid'].'WebController';
    }

}

class AppController{

    public function beforeHook($params){
        // echo 'beforeHook';
    }

    public function afterHook(){
        // some logic here
        // echo 'afterHook';
        $dispatcher = new Dispatcher;
        require "verbose.php";
    }

    public function indexAction($params){
        // Action handling
        if (isset($params['appid'])) {
            require 'app/'.$params['appid'].'/home.php';
        }
    }
    
    public function trafficAction($params){
        // Action handling
            require 'app/'.$params['appid'].'/traffic.php';
    }

}

class ListingsController{

    public function beforeHook($params){
       $_GET['app_id'] = $params['appid'];
        // echo 'beforeHook';
    }

    public function afterHook(){
        // some logic here
        // echo 'afterHook';
        $dispatcher = new Dispatcher;
        require "verbose.php";
        var_dump($_GET);
    }

    public function indexAction($params){
        // Action handling
        if (isset($params['appid'])) {
            require 'app/'.$params['appid'].'/com-listings.php';
        }
    }
    
    public function listAction($params){
        // Action handling
            require 'app/'.$params['appid'].'/com-listings.php';
    }
    
    public function individualsAction($params){
        // Action handling
            require 'app/'.$params['appid'].'/ind-listings.php';
    }    

    public function companiesAction($params){
        // Action handling
            require 'app/'.$params['appid'].'/com-listings.php';
    }

}

class ApiController{

    public function beforeHook($params){
       // $_GET['app_id'] = $params['appid'];
        // echo 'beforeHook';
    }

    public function afterHook(){
        // some logic here
        echo 'afterHook';
        $dispatcher = new Dispatcher;
        // require "verbose.php";
        // var_dump($_GET);
    }

    public function indexAction($params){
        // Action handling
        if (isset($params['appid'])) {
            require 'app/'.$params['appid'].'/com-listings.php';
        }
    }
    
    public function listAction($params){
        // Action handling
            require 'app/'.$params['appid'].'/com-listings.php';
    }
    
    public function individualsAction($params){
        // Action handling
        // data=company&ext=txt&format=JSON&headers=TRUE
        $_POST['projectUriPath'] = PROJECT_URIPATH;
        $_GET['data'] = 'individual';
        $_GET['ext'] = 'txt';
        $_GET['format'] = 'JSON';
        $_GET['headers'] = 'TRUE';
            require 'flatfiledata/returnFlatFileData.php';
    }    

    public function companiesAction($params){
        // Action handling
        // data=company&ext=txt&format=JSON&headers=TRUE
        $_POST['projectUriPath'] = PROJECT_URIPATH;
        $_GET['data'] = 'company';
        $_GET['ext'] = 'txt';
        $_GET['format'] = 'RAW';
        $_GET['headers'] = 'TRUE';
            require 'flatfiledata/returnFlatFileData.php';
    }

}

class UsersController{

    public function beforeHook($params){
        var_dump($params);
        // some logic here
        echo 'beforeHook';
        var_dump($params);
        echo '$_GET is below<br/>'.PHP_EOL;
    }

    public function afterHook(){
        // some logic here
        // echo 'afterHook';
        $dispatcher = new Dispatcher;
        require "verbose.php";
    }

    public function listAction($params){
        // Action handling
        echo 'listAction';
    }

    public function showAction($params){
        // Action handling

        echo 'showAction';
    }

}
?>