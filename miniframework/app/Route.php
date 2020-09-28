<?php 

namespace App;
use MF\Init\Bootstrap;

class Route extends Bootstrap
{	
	// rotas existentes
	protected function initRoutes()
	{
		$route['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index',
		);

		$route['sobre'] = array(
			'route' => '/sobre',
			'controller' => 'indexController',
			'action' => 'sobre'
		);

		$this->setRoutes($route);
	}
}