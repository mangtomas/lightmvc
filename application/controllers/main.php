<?php

class main extends MVC_controller{
	
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->render('common/header_');
	}

}