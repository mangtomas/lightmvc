	<div id="content" class="right">
		<h1>Leave (Sick)</h1>
		
			<table cellpadding="0" cellspacing="0" border="0" width="100%" class="cstm-t" style="margin:0">
	<thead>
	<tr><th>Leave to apply</th><th>From</th><th>To</th><th>Date request</th><th>Satus</th></tr>
	</thead>
	<tbody>
	<?php
	
	foreach($sick as $key){
	$stat = ($key['status']==1) ? "Granted" : "Pending";
			echo "<tr><td>".$key['leave_apply']."</td><td>".$key['fr']."</td><td>".$key['tod']."</td><td>".$key['date']."</td><td>".$stat."</td></tr>";
	}
	
	?>
	</tbody>
	</table>
		</div>
		<br class="clear" />
	</div>
</div>