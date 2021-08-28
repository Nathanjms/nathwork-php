<?php

/*
* App Core Class
* Created URL & loads core controller
* URL FORMAT - /controller/method/params
*/
class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    function __construct()
    {
        // print_r($this->getUrl());
        $url = $this->getUrl();

        // Look in controllers for first value
        if($url && file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }

        // Require controller
        require_once '../app/controllers/' . $this->currentController . '.php';
        
        // Instantiate controller class
        $this->currentController = new $this->currentController;
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}