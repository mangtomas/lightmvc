<?php
function base_url(){
	global $current_dir;
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $domainName = $_SERVER['HTTP_HOST'];
        return $protocol.$domainName.'/'.$current_dir.'/';
}

function redirect($url){
	return header('location:'.base_url().$url);
}

function curl(){
	global $config;
		$curl = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		$base_url = $config['base_url'];// 'http://localhost/mvc/';
		$url = str_replace($base_url,'',$curl);
		$x = explode('/',$url);	
		if($x[1] == ""){
			$method = "index";
		}else{
			$method = $x[1];
		}	
		return $method;
}

function r_string($string){
	return mysql_real_escape_string(strip_tags($string));
}

function r_md5($string){
	return md5(r_string($string));
}

