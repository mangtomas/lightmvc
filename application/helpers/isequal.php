<?php

function isequal($frdb,$sval){
		if($frdb==$sval){
			return 'selected="selected"';
		}else{
			return false;
		}
}

function str_rem($del,$subject){
	return str_replace($del,"",$subject);
}


function get_hm($in,$date){
		$tin = str_rem(':',$in);
		$span = str_rem(':','07:15:00');
		$sphr = 60 * 60;
		if($tin <$span){
			return "---";
		}else{
			$a = getmins($in);
			$mins = $mins + $a;
			$lates['mins'] = $mins;
				
				$start = strtotime($date." 07:15:00");
					$end = strtotime($date." ".$in);
					$dif = $end - $start;
					//hours
					$hr = round($dif/$sphr,0);
					$hour = $hour + $hr;
					$lates['hours'] = $hour;
		}
		return $lates['hours'].":".$lates['mins'];
	}

function udr_time($out,$date){
		$sphr = 60 * 60;
		$utime = str_rem(':','16:00:00');
		$cn = str_rem(':',$out);
		
		if($out < $utime){
					
					$a =  60 - getmins($out) ;
					$mins = $mins + $a;
					
					
					
					//hours
					$start = strtotime($date." ".$out);
					$end = strtotime($date." 16:00:00");
					$dif = $end - $start;
					
					
					
					$hr = round($dif/$sphr,0);
					$hour = $hour + ($hr - 1);
					return $hour.":".$mins;
		}else{
			return "-";
		}
			
}
	
//get minutes of time
function getmins($time){
		$time = explode(':',$time);
		return $time[1];
}
	
//get hour
function gethour($time){
	$time = explode(':',$time);
	return $time[0];
}

function selected($i,$e){
	if(empty($i)){
	$i = 00;
	}
	return ($i==$e) ? "selected=selected" : null;
}

//!important format "year-month-day hr:min:sec"
function getDiff($date,$to){
	$to_time = strtotime($to);
	$from_time = strtotime($date." 7:00:00");
	$diff = $to_time - $from_time;
	//hours
	//$hours =  round($diff/(60*60), 0, PHP_ROUND_HALF_DOWN);
	//minutes
	$mins = round(abs($to_time - $from_time)/60,0, PHP_ROUND_HALF_DOWN);
	return $mins;
}

function HrtoMins($Minutes){
    $Min = ($Minutes < 0) ? abs($Minutes) : $Minutes;
    $iHours = Floor($Min / 60);
    $Minutes = ($Min - ($iHours * 60)) / 100;
    $tHours = $iHours + $Minutes;
    if ($Minutes < 0)
    {
        $tHours = $tHours * (-1);
    }
    $aHours = explode(".", $tHours);
    $iHours = $aHours[0];
    if (empty($aHours[1]))
    {
        $aHours[1] = "00";
    }
    $Minutes = $aHours[1];
    if (strlen($Minutes) < 2)
    {
        $Minutes = $Minutes ."0";
    }
    $tHours = $iHours .":". $Minutes;
    return $tHours;
}

function getRate($basic,$return){
	$perday = ($basic * 12) / 365;
	$perhour = $perday / 8;
	$permin = $perhour / 60;

	switch ($return) {
		case 'perday': return round($perday,2);
			# code...
			break;
		case 'perhour': return round($perhour,2);
			# code...
			break;
		case 'permin':return round($permin,2);
			# code...
			break;
		default:
			# code...
			return "oops";
			break;
	}
}
