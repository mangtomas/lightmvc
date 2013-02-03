<?php

class reportsModel extends MVC_model{
	public function __construct(){
		parent::__construct();
	}

	public function pslip(){
			$a = $this->crud->read("SELECT * FROM payroll");
			return $a;
	}
}