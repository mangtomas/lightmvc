<h1 class="ttle brd">Add Positions</h1>
			<p class="addposerror"></p>
			<br />

<div class="g-button-group tdepcon" id="dep-c" >
									  <a class="g-button dropdown-toggle blue department"  data-toggle="dropdown" href="#">
											<span id="tdep" title="Select Department">Select Department</span> <span class="caret"></span>
						
									  </a>
									  <ul class="dropdown-menu">
										<?php
							
										
										foreach($deps as $key){
										echo "<li><a href='#' class='slectdep' onClick=\"thisdep("."'".$key['dep_name']."'".",".$key['id'].")\" id='dp_".$key['id']."' title='".$key['dep_name']."'>".$key['dep_name']."</a></li>";
										}
										
										
										?>
									  </ul>
								
									</div>
			
			<form onSubmit="return validate();" action="<?=base_url().'jobanddep/';?>" id="idaddpos" method="POST">
			
			<input type="hidden" id="dep_n" value="" name="dep_id" class="inp-search">
		
			<p>Position<br />
			<input type="text" value="" id="pst" name="pos[]" class="inp-search positionko"> <a href="#" onClick="addmore()">[+]Add more</a>
			</p>
			<span id="addmorespan">
			</span>
			<p><input type="submit" name="addposition" value="Save" class="g-button blue small"/></p>
			</form>
			
		