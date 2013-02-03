<?php
function base_url(){
	$http = 'http';
	
			// check for secure connection
		if (isset($_SERVER["HTTPS"])){
				if ($_SERVER["HTTPS"] == "on"){
					$http .= "s";
				}
			}
	
		$http .= "://";

		if ($_SERVER["SERVER_PORT"] != "80"){
			$http = str_replace('[0-9A-Za-z]',$http);
			$http .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
			
		}else{
			$http .= $_SERVER["SERVER_NAME"];
		}

		$base = ltrim($_SERVER['REQUEST_URI'],'/');
		$base = explode('/', $base);

		return $http.'/'.$base[0].'/';

}

function redirect($url,$ref = false){
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
	return strip_tags($string);
}

function r_md5($string){
	return md5(r_string($string));
}

function r_sha($string){
	return sha1(r_string($string));
}
