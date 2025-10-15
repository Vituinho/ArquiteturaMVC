<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function index() {
		$usuario = Container::getModel('Usuario');
		$this->view->usuarios = $usuario->getAll();
		$this->render('usuarios');
	}
}


?>