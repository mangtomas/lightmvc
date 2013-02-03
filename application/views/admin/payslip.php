<div class="container">
	<div class="wrapper">
			<h1>Payslip</h1>


			<div class="datagrid">
							<table>
								<thead><tr><th>Emp ID</th><th>Employee Name</th><th>Cut Off</th><th>Gross Pay</th><th>Lates</th><th>Net Pay</th></tr></thead>


								<tbody>
								<?php
								$alt = 0;
								foreach($result as $key){
								$oddoreven = (($ctr++)%2) ? "alt" : "odd";
				
								?>
								<tr class=<?=$oddoreven;?>><td><?=$key['emp_id'];?></td>
								<td><?=$key['emp_name'];?></td>
								
								<td><?=$key['c_off'];?></td><td><?=$key['basic'];?></td><td><?=$key['absencesnlates'];?></td><td><?=$key['netpay'];?></td>
								
											
								</tr>
								<?}?>
								</tbody>
								</table>

								<!--<tfoot><tr><td colspan="4"><div id="paging"><ul><li><a href="#"><span>Previous</span></a></li><li><a href="#" class="active"><span>1</span></a></li><li><a href="#"><span>2</span></a></li><li><a href="#"><span>3</span></a></li><li><a href="#"><span>4</span></a></li><li><a href="#"><span>5</span></a></li><li><a href="#"><span>Next</span></a></li></ul></div></tr></tfoot>
								--></div>
	</div>
</div>