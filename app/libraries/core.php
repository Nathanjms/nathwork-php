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
        $this->getUrl();
    }

    public function getUrl()
    {
        echo $_GET['url'];
    }
}