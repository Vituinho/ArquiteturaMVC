<?php

namespace App;

class Route {

    public function initRoutes() {
        
        $routes['home'] = ['route' => '/', 'controller' => 'indexController','action' => 'index'];

        $routes['sobre_nos'] = array(
            'route' => '/',
            'controller' => 'indexController','action' => 'sobreNos'
        );
    }

    public function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}

?>