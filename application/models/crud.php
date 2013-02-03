<?php
class crud extends MVC_model{
	//mangtomas crud
	
	public function __construct(){
		parent::__construct();
	}
	public function create($tbl,$vals = array()){
	$query = $this->db->prepare('INSERT INTO '.$tbl.' ('.implode(', ',array_keys($vals)).') VALUES (:'.implode(', :',array_keys($vals)).')');
	return $query->execute($vals);
	}
	
	public function read($query,$vals = array()){
		$query = $this->db->prepare($query);
		
		$query->execute($vals);
		return $query->fetchAll();
	}
	public function update($tbl,$flds= array(),$con = array()){
		$query = $this->db->prepare('UPDATE '.$tbl.' SET '.implode('=?',array_keys($flds)).'=? WHERE '.implode('=?',array_keys($con)).'=?');
		//echo 'UPDATE '.$table.' SET '.implode(' = ?',array_keys($flds)).' = ? WHERE '.implode(' = ?',array_keys($con)).' = ?';
		return $query->execute(array_merge(array_values($flds),array_values($con)));
	}
	public function delete($tbl,$con = array()){
		$query = $this->db->prepare('DELETE FROM '.$tbl.' WHERE '.implode('=?',array_keys($con)).'=?');
		return $query->execute(array_values($con));
	}
}