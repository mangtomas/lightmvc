<?php
class validate extends MVC_model{
public function __construct(){
parent::__construct();
}

public function user($uname,$pass){

		$q = $this->db->prepare('SELECT * FROM users WHERE username = :user AND password = :pass');
		$q->execute(array(':user'=>$uname,':pass'=>$pass));
		$res = $q->fetch(PDO::FETCH_ASSOC);
		return ($q->rowCount() > 0 ) ? $res : false;
	}



public function identify_user($uid){
		$q = $this->db->prepare("select * from users where uid = :uid");
		$q->execute(array(':uid'=>$uid));
		$field = $q->fetchAll();
		
		if ($field[0]['usertype']=="0"){
			$q2 = $this->db->prepare("select * from employees where uid=:uid");
			$q2->execute(array(':uid'=>$uid));
			$res = $q2->fetchAll();
				if ($res[0]['gender']=="M") {
					$g = "Mr. ";
				} else {
					$g = "Ms. ";
				}
			$info['fullname'] = $g.$res[0]['firstname']." ".$res[0]['lastname'];
			$info['lastname'] = $res[0]['lastname'];
		} else {
			$q = $this->db->prepare("select * from employees where id=:id");
			$q->execute(array(':id'=>$uid));
			$res = $q->fetchAll();
			
			$info['fullname'] = $res[0]['firstname']." ".$res[0]['mid_name']." ".$res[0]['lastname'];
			$info['lastname'] = $res[0]['lastname'];
			$info['date'] = $res[0]['hiredate'];
			$info['date'] = $res[0]['hiredate'];
			$info['salary'] = $res[0]['salary'];
			$qu = $this->db->prepare('select job_name from jobs where id=:empid');
			$qu->execute(array(':empid'=>$res[0]['position']));
			$pos = $qu->fetchAll();
			$info['position'] = $pos[0]['job_name'];
		}
		return $info;
	}
	
	public function session($utype){
		return ($utype != 0) ? false : true;
	}
	
	
}