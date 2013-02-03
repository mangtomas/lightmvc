<div class="container" id="menu-con">
	<div class="wrapper">
			<ul id="dash-b">
					<li><a href="<?=base_url()."employees/";?>" class="g-button green"><i class="icon-white icon-th"></i> View All</a></li>
					<li class="sli"> <form action="<?=base_url()."employees";?>"  method="POST">Search <input type="text" class="l-input" name="search-box" id="search_box" style="margin-right:9px" /> <button name="s-btn" class="g-button blue right"><i class="icon-search icon-white"></i> Search</button></form></li>
						
				</ul>
	</div>
</div>
<div class="container" id="admin">
	<div class="wrapper minh">
					<h1 class="title2">Add Employee</h1>
					<form action="<?=base_url()."employees/add";?>" method="POST" onsubmit="return validate();">
					<div class="thebox">
					<?=isset($success) ? "<p class='add_success'>".$success."</p>" : null;?>
					<h1 class="title2"><span>All fields are required</span></h1>
						<table style="margin:0" id="tbl-emp">
							<tr><td><p>Despartment<br />
									<div class="g-button-group tdepcon" id="dep-c" >
									  <a class="g-button dropdown-toggle blue department"  data-toggle="dropdown" href="#">
											<span id="tdep" title="Select Department">Select Department </span> <span class="caret"></span>
						
									  </a>
									  <ul class="dropdown-menu">
										<?php
										foreach($gdep as $key){
										echo "<li><a href='#' class='slectdep' id='dp_".$key['id']."' title='".$key['dep_name']."'>".$key['dep_name']."</a></li>";
										}
										
										?>
									  </ul>
									  <input type="hidden" id="dept" name="dept" />
									</div>
									</p>
									</td>
									<td><p>
									Job Position<br /><div class="g-button-group tdepcon" id="jobpos">
									  <a class="g-button dropdown-toggle blue" data-toggle="dropdown" href="#">
											<span id="tjo">Select Job position </span> <span class="caret"></span>
									  </a>
									  <ul class="dropdown-menu" id="tjob">
									  </ul>
									 
									  <input type="hidden" id="jobp" name="jobp" />
									</div></p>
									</td><td><p>Salary <br /><div class="g-button-group"><input type="text" name="sal" id="sal" /></div></p></td></tr>
										</table>
										<table class="tbl-inpt">
											<tr>
												<td>Lastname <br /><br /><div class="g-button-group"><input type="text" onkeyup="genUname(this.value)" autocomplete="off" class="inp-search" id="lname" name="lname"></div></td>
												<td>Firstname<br /><br /><input type="text" autocomplete="off" class="inp-search"  id ="fname" name="fname"></td>
												<td>Middle Name<br /><br /><input type="text" autocomplete="off" class="inp-search" id="mname" name="mname"></td>
											</tr>
											<tr>
												<td> Birth date<br /><br />
													<input type="text" name="bday" id="bday" class="inp-search " onChange="comp()"/>
												</td>
											
												<td>Age <br /><br /><input type="text" autocomplete="off" value="" style="width:30px" maxlength="2" name="age" id="age"></td>
												<td>
													Gender<br /><br />
													<select name="gender" class="dropdown">
																				<option selected="selected" value="">-</option>
																				<option value="Male">Male</option>
																				<option value="Female">Female</option>
													</select>
												</td>
												
											</tr>
											<tr><td colspan="3">Address <br /><br /><input type="text" id="address" name="address" style="width:100%"/></td></tr>
											<tr >
												<td>Religion <br /><br /><select id="relg" name="religion" class="dropdown">
													<option value="">Select Religion</option>
													<option value="Roman Catholic">Roman Catholic</option>
													<option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
													<option value="Christian">Christian</option>
													<option value="other">Other</option>
												
												</select></td>
											<td>Civil Status <br /><br />
													<select name="cv_stat" class="dropdown" id="gender">
																	<option selected="selected" value="">Select status</option>
																	<option value="Single">Single</option>
																	<option value="Married">Married</option>
																	<option value="Widowed">Widowed</option>
																	</select><br>
										
													
												</td>
												<td>Contact Number <br /><br /><input type="text" class="inp-search" value="" autocomplete="off" name="cnumber" id="cnumber"></td>
											</tr>
										</table>
										<fieldset class="left">
										<legend>Benefits</legend>
										<ul id="bnfts">
										<li>SSS Number <br /><br /><input type="text" class="inp-search" value="" autocomplete="off" name="sss" id="sss"></li>
										<li>PhilHealth Number <br /><br /><input type="text" class="inp-search" value="" autocomplete="off" name="philhealth" id="philhealth"></li>
										<li>PAG-IBIG Number <br /><br /><input type="text" class="inp-search" value="" autocomplete="off" name="pagibig" id="pagibig"></li>
										<li>TIN Number <br /><br /><input type="text" class="inp-search" value="" autocomplete="off" name="tin" id="tin"></li>
										
										</ul>
										</fieldset>
										<fieldset class="left">
										<legend>Account</legend>
										<ul id="bnfts">
										<li>Username <br /><br /><input type="text" class="inp-search" value="" autocomplete="off" name="regusername" id="regusername"></li>
										<li>Password <br /><br /><input type="text" class="inp-search" value="" autocomplete="off" name="regpassword" id="regpassword"></li>
										
										</ul>
										</fieldset>
										<br class="clear" />
									
					</div>
					<div class="action-con">
											<input type="submit" value="Submit" name="addemp" class="g-button green" />
					</div>
					</form>
							
	</div>
</div>