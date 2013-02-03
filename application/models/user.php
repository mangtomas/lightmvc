<?php
class user extends MVC_model{
	public function __construct(){
	parent::__construct();
	}
	
	public function who($tbl,$uid){
		$a = $this->db->prepare('SELECT * FROM '.$tbl.' WHERE id=:id');
		$a->execute(array('id'=>$uid));
		$d = $a->fetchAll();
		$q = 'SHOW columns FROM '.$tbl;

		$c = $this->db->prepare($q);
		$c->execute();
		$b = $c->fetchAll();
		$col = array();
		for($i = 0;$i<count($b);$i++){
			array_push($col,$b[$i][0]);
		}
		for($i=0;$i<=count($col);$i++){
			$x[$col[$i]] =$d[0][$i];
		}
		
		return $x;
		
	}

}