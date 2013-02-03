		<div id="content" class="right">
		<h1><?=$lreq;?> Leave request information</h1>
		<form action="" method="POST">
		<?=(isset($success)) ? '<p class="success">'.$success.'</p>' : null;?>
		<?=(isset($error)) ? '<p class="error">'.$error.'</p>' : null;?>
		<p class="reqt"><b>Leave Request type : </b><br /> <input type="text" name="lrequest" disabled="disabled" class="inpt" value="<?=$lreq;?>" /></p>
		<p class="reqt"><b>Employee Name : </b><br /> <input type="text" name="fname" disabled="disabled" class="inpt" value="<?=$user;?>" /></p>
		<p class="reqt"><b>Position : </b><br /> <input type="text" name="position" disabled="disabled" class="inpt" value="<?=$position;?>" /></p>
		<p class="reqt"><b>Hire Date : </b><br /> <input type="text" name="hiredate" disabled="disabled" style="width:200px" class="inpt" value="<?=$date;?>" /></p>
		<p class="reqt"><b>Salary : </b><br /> <input type="text" name="hiredate" disabled="disabled" style="width:200px" class="inpt" value="<?=$salary;?>" /></p>
		
		<input type="hidden" name="leave" value="<?=$lreq;?>" />
		<p><b>From :</b> <input type="text" id="fromdatepicker" class="inpt" style="width:200px" name="fr" /> <b>To :</b> <input type="text" style="width:200px" name="to" class="inpt" id="todatepicker" /> </p>
		<p><b>Reason</b></p>
		<textarea id="reason" name="reason"></textarea>
		<br />
		<input type="submit" value="Submit" name="reqleave" class="g-button green" />
		</form>
		</div>
		<br class="clear" />
		<!--end of wrapper (Important )//-->
	</div>
</div>