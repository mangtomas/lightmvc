<?php

class main extends MVC_controller{
	
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->render('common/header_');
	}
	
	public function test($id =false){
		echo $id[0];
	}

}