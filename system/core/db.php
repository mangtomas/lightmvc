<?php
class Db extends PDO{
    public $conn = false;
    private $id = false;

    public function __construct(){
        global $config;
      
		$dsn = "{$config['database_type']}:host={$config['host']};dbname={$config['database_name']}";
		parent::__construct($dsn, $config['username'],$config['password']);
        
		try{
            PDO::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            die($e->getMessage());
        }
		
    }
	public function show_column($tbl = false){
			$q = 'SHOW columns FROM '.$tbl;

				$a = $this->db->prepare($q);
				$a->execute();
				$b = $a->fetchAll();
				$col = array();
				for($i = 0;$i<count($b);$i++){
					array_push($col,$b[$i][0]);
				}
		return $col;
	}
    public function where($condition = array(),$lgc = false){
            foreach ($condition as $key => $value) {
                # code...

                    if(!is_numeric($value)){
                        $value = "'".$value."'";
                    }
                $v[] = $key.'='. $value;
            }
            if(count($condition)!=1 && $lgc == false){
                $lgc = ' AND ';
            }
            $lgc = ($lgc == false) ? null : $lgc;
            $where = implode($lgc , $v);
           return $where;

    }
   
}