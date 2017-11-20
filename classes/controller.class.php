<?php
class Controller{
 
	private $template;
	private $view;
	private $data;
 
	public function __construct(){
		$this->view = new View();
		$this->data = Model::getData();
	}
 
	public function display(){    
		$this->view->setTemplate();
		$this->view->setContent("title", "OOP mit PHP");
		$this->view->setContent("content", $this->data);
		$this->view->setContent("footer", "&copy 2016 by minions\n");
 
		return $this->view->parseTemplate();
	}
 
}
?>