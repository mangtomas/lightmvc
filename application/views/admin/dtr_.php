<div class="container" id="menu-con">
	<div class="wrapper">
			<ul id="dash-b">
					<li><form action="<?=base_url()."dailytimerecord";?>" method="POST">
			View Daily Time Record | Year: 
			<select name="yr" style="height:30px;text-align:center">
			<option value="2012">2012</option>
			<option value="2013">2013</option>
			</select>
				Cut Off 
				<select name="c_off" style="margin-right:9px;height:30px;text-align:center">
				<option value="01-1" <?=selected($i,'01-1');?>>January, 8 - January, 23</option>	
				<option value="01-0" <?=selected($i,'01-0');?>>January, 24 - February, 7</option>	
				<option value="02-1" <?=selected($i,'02-1');?>>February, 8 - February, 23</option>	
				<option value="02-0" <?=selected($i,'02-0');?>>February, 24 - March, 7</option>	
				<option value="03-1" <?=selected($i,'03-1');?>>March, 8 - March, 23</option>	
				<option value="03-0" <?=selected($i,'03-0');?>>March, 24 - April, 7</option>	
				<option value="04-1" <?=selected($i,'04-1');?>>April, 8 - April, 23</option>	
				<option value="04-0" <?=selected($i,'04-0');?>>April, 24 - May, 7</option>	
				<option value="05-1" <?=selected($i,'05-1');?>>May, 8 - May, 23</option>	
				<option value="05-0" <?=selected($i,'05-0');?>>May, 24 - June, 7</option>	
				<option value="06-1" <?=selected($i,'06-1');?>>June, 8 - June, 23</option>	
				<option value="06-0" <?=selected($i,'06-0');?>>June, 24 - July, 7</option>	
				<option value="07-1" <?=selected($i,'07-1');?>>July, 8 - July, 23</option>	
				<option value="07-0" <?=selected($i,'07-0');?>>July, 24 - August, 7</option>	
				<option value="08-1" <?=selected($i,'08-1');?>>August, 8 - August, 23</option>	
				<option value="08-0" <?=selected($i,'08-0');?>>August, 24 - September, 7</option>	
				<option value="09-1" <?=selected($i,'09-1');?>>September, 8 - September, 23</option>	
				<option value="09-0" <?=selected($i,'09-0');?>>September, 24 - October, 7</option>	
				<option value="10-1" <?=selected($i,'10-1');?>>October, 8 - October, 23</option>	
				<option value="10-0" <?=selected($i,'10-0');?>>October, 24 - November, 7</option>	
				<option value="11-1" <?=selected($i,'11-1');?>>November, 8 - November, 23</option>	
				<option value="11-0" <?=selected($i,'11-0');?>>November, 24 - December, 7</option>	
				<option value="12-1" <?=selected($i,'12-1');?>>December, 8 - December, 23</option>	
				<option value="12-0" <?=selected($i,'12-0');?>>December, 24 - January, 7</option>	
				
				</select>
			<button name="s-dtr" class="g-button blue right" ><i class="icon-search icon-white"></i> Submit</button>
				
			
			</form></li>
					
				</ul>
	</div>
</div>
<div class="container" id="admin">
	<div class="wrapper minh">
					<h1 class="title2">Daily Time Record (<?=(isset($title))? $title : "Current";?>)</h1>
					
					
		<div class="datagrid">
		<table width="100%" class="cstm-t toboxshadow dt" cellspacing="0" style="margin-bottom:20px">
		<thead>
			<tr><th>EId</th><th>Employee Name</th> <th>Time-in</th><th>Lates</th><th>Time-out</th><th>Total hours</th><th>Date</th></tr>
		</thead>
		<tbody>
		<?php
		
		$ctr = 0;
		foreach($dtr as $key){
		//short and simple logic odd and even
		$oddoreven = (($ctr++)%2) ? "even" : "odd";

		$mins = get_hm($key['_in'],$key['date']);
		//get total difference by minutes
		$total_mins = getDiff("".$key['date']." ",$key['date']." ".$key['out']);
		//get minutes late
		$get_mins = explode(':',$mins);
		$hr = $get_mins[0];
		$final = HrtoMins($total_mins - $get_mins[1]);
		$break_time = explode(':', $final);
		$e2na = ($break_time[0] <=5) ? ($break_time[0]-$hr).":".$break_time[1] : ($break_time[0] - 1) - $hr .":".$break_time[1];
		//deduct lates
		//getDiff("".$key['date']." ",$key['date']." ".$key['out'])
		echo "<tr  class=".$oddoreven."><td>".$key['id']."</td><td>".$key['lastname'].",".$key['firstname']." ".$key['mid_name']."</td><td>".$key['_in']."</td><td>".$mins."</td><td>".$key['out']."</td><td>".$e2na."</td><td>".$key['date']."</td></tr>";
	
		}
		
		?>
		</tbody>
		</table>
	
	</div>
		<?php
		if($dtr[0]['p_status']==0){
			?>
			<div class="action-con" style="margin:10px 0 10px 0">
			<?php
				if(empty($dtr)){
				echo "<p class='g-button red'>No result</p>";
				}else{
					?>
					<form action="<?=base_url()."dailytimerecord/summary";?>" method="POST">
						<input type="hidden" value="<?=$fora;?>" name="dte" />
						<input type="submit"  value="View summary" name="smry" class="g-button green" />
						</form>
					<?php
				}

			?>
			</div>
					
			<?php
		}else{
			?>
			<div class="action-con" style="margin:10px 0 10px 0">
				<p class='g-button red'>Cut off was already submited</p>
			</div>
			<?php
		}
		?>
									
					
				
							
</div>