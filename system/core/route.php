<?php
class Route{
	protected $_controller;
	protected $_method;
	protected $_args;

	public function __construct(){
		global $config;

		$http = 'http';
	
			// check for secure connection
		if (isset($_SERVER["HTTPS"])){
				if ($_SERVER["HTTPS"] == "on"){
					$http .= "s";
				}
			}
	
		$http .= "://";
	
		// get full url and return the string
		if ($_SERVER["SERVER_PORT"] != "80"){
			$http = str_replace('[0-9A-Za-z]',$http);
			$http .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
			
		}else{
			$http .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		$base = ltrim($_SERVER['REQUEST_URI'],'/');
		$base = explode('/', $base);
		//echo 'http://'.$_SERVER['SERVER_NAME'].'/'.$base[0].'/';
	
		/*Remove base_url, leaving controllers, methods and params requests.
		*/
		 $uri = ($http==$config['base_url']) ? $config['base_url'] : 'http://'.$_SERVER['SERVER_NAME'].'/'.$base[0].'/';
		$url = str_replace($uri,"", $http);

		/*Find dashed(-) and replace underscore(_)
		*/
		
		$url = str_replace("-","_", $url);

		/*Segments of controllers, methods and params
		*/
		$x  = explode('/', $url);

		if($x[0] ==''){
			$y[0] = strtolower($config['default_controller']);//'main';//strtolower($this->conf['default_controller']);
			$y[1] = 'index';
			$y[2] = array();
		}elseif(!isset($x[1]) || $x[1]== ''){
			$y[0] = $x[0];
			$y[1] = 'index';
			$y[2] = array();
		}else{
			for($i = 0;$i < 2; $i++){
				$y[$i] = $x[$i];
			}
				if(isset($x[2])){
					//$y[2] = $x[2];//get id value
					$ctr = 0; //initialize
					$par = array();
					foreach($x as $z){
						if($ctr < 2){
							$ctr++;
							continue;
						}
					array_push($par,$z);
					}
					$y[2] = $par;
				}
				
			
		}
                                
		$this->_controller = $y[0];
		$this->_method = $y[1];
		if(!empty($y[2])){
			$this->_args = $y[2];
		}

	}

	public function getController(){
		return $this->_controller;
	}

	public function getMethod(){
		return $this->_method;
	}

	public function getArgs(){
		return $this->_args;
	}
	
	
}