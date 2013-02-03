		<div id="content" class="right">
		<h1>Leave available</h1>
		<p>Every employee of Universal Commercial Corporation have the right to file a leave based on the labor code of the Phils.     
		The company provide two (2) consecutive leaves in a year it can be converted into cash which they after the end of the year as incentives.</p>
		<p>You have: <?=$lct;?> Available leaves</p>
	
			<div class="g-button-group">
  <a class="g-button green dropdown-toggle <?=(isset($dis))? 'disabled':null;?>" data-toggle="dropdown" href="#">
    Request Leave <span class="caret"></span>
  </a>
  <ul class="dropdown-menu">
      <li><a <?=(isset($dis)|| $dis==true)? null: 'href='.base_url().'users/request/sick';?>>Sick Leave</a></li>
      <li><a <?=(isset($dis)|| $dis==true)? null: 'href='.base_url().'users/request/vacation';?>>Vacation Leave</a></li>
 
  </ul>
</div>
		
		</div>
		<br class="clear" />
		<!--end of wrapper (Important )//-->
	</div>
</div>