<?php

namespace App\Controllers;

// recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

// models
use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action 
{
	public function index()
	{
		$produto = Container::getModel('produto');
		
		$produtos = $produto->getProdutos();
		$this->view->dados = $produtos;
		$this->render('index');
	}

	public function sobre()
	{
		$info = Container::getModel('info');
		
		$infos = $info->getInfos();
		$this->view->dados = $infos;
		$this->render('sobre');
	}
}