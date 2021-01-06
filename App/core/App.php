<?php

namespace App\Core;
class App {

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
    
    public function __construct() {
     print_r($url = $this->parseURL());
    }

    public function parseURL() {
        return explode('/', filter_var($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL));
    }
}