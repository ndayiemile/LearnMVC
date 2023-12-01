<?php

class App{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = []; 
    public function __construct(){
        $url = $this->parseUrl();

        // check if the url exists
        if(file_exists('../app/controllers/'.$url[0].'.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }

        // instantiate a controller 
        require_once '../app/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;

        // check if the method exists
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // check if some params remains and assigns them
        $this->params = $url ? array_values($url) : [];

        // call it's method 
        // pass params
        call_user_func_array([$this->controller,$this->method], $this->params);
    }

    // url accepting and filtering function
    public function parseUrl(){
        if(isset($_GET['url'])){
            return $url = explode('/',filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }else{
            echo "no request sent";
        }
    }
}
?>