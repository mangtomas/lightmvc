<?php
class compute extends MVC_model{
	public $salary;
	public $query;
	public function __construct(){
		parent::__construct();
	}
	
	
	//get total hour or minutes 
	public function get_total_time($by,$time){
		if(is_array($time)){
				switch($by){
					case 'min':
						foreach($time as $k){
							$t = getmins($k);
							$to = $to + $t;
						}
						break;
						default:
						if(is_array($time)){
							foreach($time as $k){
								$t = $this->gethour($k);
								$to = $to + $t;
							}
				}
			}
		return $to;
		}
	}
	
	//get total lates by hour and minutes
public function total_hours($id,$fr,$to){
	$a = $this->crud->read('SELECT * FROM dtr WHERE emp_id=:id AND date BETWEEN :fr AND :t',array('id'=>$id,'fr'=>$fr,'t'=>$to));
		foreach($a as $key){

		$mins = get_hm($key['_in'],$key['date']);

		//get total difference by minutes
		$total_mins = getDiff("".$key['date']." ",$key['date']." ".$key['out']);
		
		//get minutes late
		$get_mins = explode(':',$mins);
		$hr = $get_mins[0];
		$final = HrtoMins($total_mins - $get_mins[1]);
		$break_time = explode(':', $final);
		//total hours and minutes per day...
		$per_day = ($break_time[0] <=5) ? ($break_time[0]-$hr).":".$break_time[1] : ($break_time[0] - 1) - $hr .":".$break_time[1];
		$x = explode(':', $per_day);
		$hour = $hour + $x[0];
		$s = ($hour * 60);
		$min = $min + $x[1];
	
		}
		//return over all count of hours and minutes
		$total = HrtoMins($min + $s);
		return $total;
	}




	//get total hours for paticular cutoff
	public function get_total_hours($id,$fr,$to){
	$a = $this->crud->read('SELECT * FROM dtr WHERE emp_id=:id AND date BETWEEN :fr AND :t',array('id'=>$id,'fr'=>$fr,'t'=>$to));
		$sphr = 60 * 60;
		foreach($a as $key){
			$dtime = str_rem(':','07:16:00');
			$get_late = str_rem(':',$key['_in']);
			$lates = ($get_late > $dtime) ? get_hm($key['_in'],$key['date']) : $key['_in'];
			$x = explode(':', $lates);
			$hours = $hours + $x[0];
			$mins = $mins + $x[1];
		}
		
		$result = HrtoMins(($hours * 60) + $mins);
		return $result;
	}
	//get pay per day  basic * 12 / 365 = per day
	public function payperday($id){
	$a = $this->crud->read('SELECT salary FROM employees WHERE id=:id',array('id'=>$id));
	return $this->salary = round(($a[0]['salary'] * 12)/365 , 2);
	}
	//per hour basis
	public function perhour(){
		return round($this->salary / 8, 2);
	}
	//per minutes
	public function perminute(){
		return round($this->perhour()/60, 2);
	
		}
	
	public function gross_pay($var){
		return $total_hour = $this->get_total_hours($var);
		
	}
	

	
}

/*

	//$per_day = explode(':',HrtoMins($per_day));



		//	$e2na = ($break_time[0] <=5) ? ($break_time[0]-$hr).":".$break_time[1] : ($break_time[0] - 1) - $hr .":".$break_time[1];
		
			//$total_per_day = ($per_day[0] <= 5) ? ($per_day[0] -1).":".$per_day[1] : ($per_day[0]-1)-$late_hour.":".$per_day[1];
			//$final  = $final + $total_per_day;

			//$total_mins = $total_mins + getDiff("".$key['date']." ",$key['date']." ".$key['out']);
			
			//$over_all = HrtoMins($total_mins);
			//get difference
			//$diff = $to_time - $start_time;
			//Get difference hours
			//$hours =  round($diff/(60*60), 0, PHP_ROUND_HALF_DOWN);
			//$hours  = ($hours > 4) ? $hours - 1  : $hours; 
			//Get difference minutes
		//	$mins = round(abs($to_time - $start_time)/60,2);
			//minutes to
			//$algo = ($hours*60);
			//$minutes = round($diff % (60*60) / 60,0);
			//$s  = HrtoMins($algo - $minutes);
			//$ex  = explode(':',$s);
			//$hr = $hr + $ex[0];
			//$min = $min + $ex[1];

			//echo $hours." ".$key['date']." - ".$key['_in']." - ".$key['date']." - ".$key['out']." - >>>>".$s."<br />";

			//$minlates = (str_rem(':',$key['_in']) >$dtime) ? getmins($key['_in']) : '>' ; 
			//$hrlates = (str_rem(':',$key['_in']) >$dtime) ? gethour($key['_in']) : gethour($key['_in']); 
		



			//$utime = str_rem(':','16:00:00');
			//if(str_rem(':',$key['_in']) >$dtime){
					//get total minutes
					//$a = getmins($key['_in']);
					//$mins = $mins + $a;
					//$lates['minutes'] = $mins;
					//echo $key['date'].'<br />';
					//!important: calculate total hours everyday
				//	$start = strtotime($key['date']." 07:00:00");
					//$end = strtotime($key['date']." ".$key['out']);
				//	$dif = $end - $start;
					//!important:total hour day minus one hour for breaktime
					//$hr = round($dif/$sphr,0) - 1;
					//hours to mins minus mins
					//$min = ($hr*60) - ($minlates);


					//echo $min."<br />";
					//$hour = $hour + $hr;
					//$lates['hours'] = $hour;
				
			//}
			
*/