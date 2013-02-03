<div class="container" id="admin">
	<div class="wrapper minh">
					<h1 id="title">Welcome <?=$info['lastname'].", ".$info['firstname'];?> <span>What would you like to do today?</span></h1>
		
				<ul id="dash-b">
					<li><a href="<?=base_url()."employees/";?>"  class="g-button blue"><i class="icon-white  icon-th-list"></i> View Employees</a></li>
					<li><a href="<?=base_url()."employees/add/";?>" class="g-button blue"><i class="icon-white icon-plus-sign"></i> Add Employee</a></li>
					<li><a href="<?=base_url()."compensation/leave";?>"  class="g-button blue"><i class="icon-white icon-star"></i> Leave Request<?=($leavecnt==0) ? null : "<span class='noti'>".$leavecnt['count']."</span>";?></a></li>
					<li><a href="<?=base_url()."compensation";?>"  class="g-button blue"><i class="icon-white icon-minus-sign"></i> Compensations & Benefits</a></li>
					<li><a href="<?=base_url()."account/settings";?>"  class="g-button blue"><i class="icon-white icon-cog"></i> Account settings</a></li>
					
				</ul>
		
	</div>
</div>