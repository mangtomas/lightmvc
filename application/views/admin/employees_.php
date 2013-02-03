<div class="container" id="menu-con">
	<div class="wrapper">
			<ul id="dash-b">
					<li><a href="<?=base_url()."employees/add/";?>" class="g-button green"><i class="icon-white icon-plus-sign"></i> Add Employee</a></li>
					<li class="sli"> <form action="<?=base_url()."employees";?>"  method="POST">Search <input type="text" class="l-input" name="search-box" id="search_box" style="margin-right:9px" /> <button name="s-btn" class="g-button blue right"><i class="icon-search icon-white"></i> Search</button></form></li>
						
				</ul>
	</div>
</div>
<div class="container" id="admin">
	<div class="wrapper minh">
					<h1 class="title2"><span>Employees</span></h1>
							<?=isset($success) ? "<p class='add_success'>".$success."</p>" : null;?>
							<div class="datagrid">
							<table>
								<thead><tr><th>Emp ID</th><th>Employee Name</th><th>Department</th><th>Position</th><th>Contact</th><th>Hire Date</th><th>Action</th></tr></thead>


								<tbody>
								<?php
								$alt = 0;
								foreach($emp as $key){
								$oddoreven = (($ctr++)%2) ? "alt" : "odd";
								$name = $key['firstname']." ".$key['mid_name']." ".$key['lastname'];
								?>
								<tr class=<?=$oddoreven;?>><td><?=$key['id'];?></td>
							<td><?=$name;?></td>
								
								<td><?=$key['dep_name'];?></td><td><?=$key['job_name'];?></td><td><?=$key['contact'];?></td><td><?=$key['hiredate'];?></td>
								<td><a href="<?=base_url()."employees/view/".$key['id']?>" class="g-button mini blue no-text" title="View"><i class="icon-th-list icon-white"></i></a>
												<a href="<?=base_url()."employees/modify/".$key['id']; ?>" class="g-button green mini no-text" title="Modify"><i class="icon-edit icon-white"></i></a>
												<a href="<?=base_url()."employees/delete/".$key['id']; ?>" title="Delete" onclick="return confirm('Are you sure you want to delete <?php echo $name; ?>')" class="g-button red mini no-text"><i class="icon-trash icon-white"></i></a></td>
											
								</tr>
								<?}?>
								</tbody>
								</table>

								<!--<tfoot><tr><td colspan="4"><div id="paging"><ul><li><a href="#"><span>Previous</span></a></li><li><a href="#" class="active"><span>1</span></a></li><li><a href="#"><span>2</span></a></li><li><a href="#"><span>3</span></a></li><li><a href="#"><span>4</span></a></li><li><a href="#"><span>5</span></a></li><li><a href="#"><span>Next</span></a></li></ul></div></tr></tfoot>
								--></div>
							
						
	</div>
</div>