<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['usuarios'] = array(
			'route' => '/usuarios',
			'controller' => 'indexController',
			'action' => 'index'
		);
		
		$this->setRoutes($routes);
	}

}

?>