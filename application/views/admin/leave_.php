<div class="container" id="menu-con">
	<div class="wrapper">
			<ul id="dash-b">
					<li><a href="<?=base_url()."compensation/leave";?>"  class="g-button blue"><i class="icon-white icon-star"></i> SSS</a></li>
					<li><a href="<?=base_url()."compensation/leave";?>"  class="g-button blue"><i class="icon-white icon-star"></i> Philhealth</a></li>
					<li><a href="<?=base_url()."compensation/leave";?>"  class="g-button blue"><i class="icon-white icon-star"></i> Pagibig</a></li>
					<li><a href="<?=base_url()."compensation/leave";?>"  class="g-button blue"><i class="icon-white icon-star"></i> BIR</a></li>
						
						
				</ul>
	</div>
</div>
<div class="container" id="admin">
	<div class="wrapper minh">
					<h1 class="title2"><span>Leave request</span></h1>		
	
<div class="datagrid"><table>
								<thead>	<tr><th>Emp_ID</th><th>Employees Name</th><th>Position</th><th>Salary</th><th>Leave to apply</th><th>Reason</th><th>From</th><th>To</th><th>Date request</th><th>Satus</th></tr>
	</thead>


								<tbody>
								<?php

	$ctr = 0;
	foreach($leave as $key){
	$oddoreven = (($ctr++)%2) ? "even" : "odd";
		$button = ($key['status']==0) ?  "<a hred='#' class='g-button mini red'>Pending</a>": "<a hred='#' class='g-button mini green'>-</a>";
		echo "<tr class=".$oddoreven."><td>".$key['emp_id']."</td><td>".$key['lastname'].",".$key['firstname']." ".$key['mid_name']."</td><td>".$key['job_name']."</td><td>".$key['salary']."</td><td>".$key['leave_apply']."</td><td><a href='#view' class='big-link toview' data-reveal-id='myModal' id='view_/".$key['emp_id']."/".$key['id']."'>View</a></td><td>".$key['fr']."</td><td>".$key['tod']."</td><td>".$key['date']."</td><td>".$button."</td></tr>";
	}
	
	?>
								</tbody>
								</table>

								<!--<tfoot><tr><td colspan="4"><div id="paging"><ul><li><a href="#"><span>Previous</span></a></li><li><a href="#" class="active"><span>1</span></a></li><li><a href="#"><span>2</span></a></li><li><a href="#"><span>3</span></a></li><li><a href="#"><span>4</span></a></li><li><a href="#"><span>5</span></a></li><li><a href="#"><span>Next</span></a></li></ul></div></tr></tfoot>
								--></div>	
	</div>
</div>