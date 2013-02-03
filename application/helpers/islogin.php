<?php

function islogin(){
		$mvc =& getInstance();
		if($mvc->session->_get('islogin')==true){
			return true;
		}else{
			return false;
	}
}

function isadmin(){
	$mvc =& getInstance();
	return ($mvc->session->_get('usertype')==0) ? true : false;
}
