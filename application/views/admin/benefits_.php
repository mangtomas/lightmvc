<div class="container" id="admin">
	<div class="wrapper minh">
					<h1 class="title2"><span>Benefits Accounts</span></h1>
							
					<div class="thebox">
					<?=isset($success) ? "<p class='add_success'>".$success."</p>" : null;?>
					<?=isset($error) ? "<p class='error'>".$error."</p>" : null;?>
					
					<h1 class="title2"><span>SSS Account</span></h1>
					<form action="<?=base_url()."account/benefits";?>" method="POST" class="f-box">
						<table class="tbl-inpt">
											<tr>
												<td>SSS account number<br /><br /><div class="g-button-group"><input  value="<?=$a_info['sss'];?>" type="text" class="inp-search" autocomplete="off" name="sss" id="sss"></div></td>
												
											</tr>
											
										</table>
					<input type="submit" name="ssss" value="Submit" class="g-button green"/>
					</form>
					
					<h1 class="title2"><span>Pagibig Account</span></h1>
					<form action="<?=base_url()."account/benefits";?>" method="POST" class="f-box">
						<table class="tbl-inpt">
											<tr>
												<td>PAGIBIG account number<br /><br /><div class="g-button-group"><input  value="<?=$a_info['pagibig'];?>" type="text" class="inp-search" autocomplete="off" name="pagibig" id="pagibig"></div></td>
												
											</tr>
											
										</table>
					<input type="submit" name="pagibigbtn" value="Submit" class="g-button green"/>
					</form>
					
					<h1 class="title2"><span>Philhealth Account</span></h1>
					<form action="<?=base_url()."account/benefits";?>" method="POST" class="f-box">
						<table class="tbl-inpt">
											<tr>
												<td>Philhealth account number<br /><br /><div class="g-button-group"><input  value="<?=$a_info['philhealth'];?>" type="text" class="inp-search" autocomplete="off" name="philhealth" id="pagibig"></div></td>
												
											</tr>
											
										</table>
					<input type="submit" name="philhealthtbn" value="Submit" class="g-button green"/>
					</form>
					
					<h1 class="title2"><span>TIN Number</span></h1>
					<form action="<?=base_url()."account/benefits";?>" method="POST" class="f-box">
						<table class="tbl-inpt">
											<tr>
												<td>TIN number<br /><br /><div class="g-button-group"><input value="<?=$a_info['tin'];?>" type="text" class="inp-search" autocomplete="off" name="tin" id="tin"></div></td>
												
											</tr>
											
										</table>
					<input type="submit" name="tinbtn" value="Submit" class="g-button green"/>
					</form>
					</div>						
						
	</div>
</div>