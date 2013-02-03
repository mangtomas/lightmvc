		<div id="content" class="right">
		<h1>Personal Information</h1>
		<p>Personal information is disabled to prevent changes</p>
		
					<form action="<?=base_url()."users/settings";?>" method="POST" class="user-info-form">
					<p class="reqt"><b>Full Name </b><br/> <input type="text" class="inpt" disabled="disabled" value="<?=$user;?>" name="lrequest"/></p>
					<p class="reqt"><b>Address </b><br/> <input type="text" class="inpt" disabled="disabled" value="<?=$info['address'];?>" name="lrequest"/></p>
					<p class="reqt"><b>Contact Number </b><br/> <input type="text" class="inpt" disabled="disabled" value="<?=$info['contact'];?>" name="lrequest"/></p>
					<!--
					
					<input type="submit" name="acc_info" value="Save" class="g-button green"/>
					-->
					</form>
					
					<h1>Account settings</h1>
		<p>Change your password frequently to prevent your account from attack.</p>
			<div id="c-password">
			<form action ="<?=base_url()."users/settings";?>" method="POST">
						<?=(isset($error)) ? "<p class='error'>".$error."</p>" : null;?>
						<?=(isset($success)) ? "<p class='success'>".$success."</p>" : null;?>
					<ul>
						<li><span>Old password</span> <input type="password" name="oldpass" id="oldpass" class="right" /><br class="clear" /></li>
						<li><span>New password</span> <input type="password" name="newpass" id="newpass" class="right" /><br class="clear" /></li>
						<li><span>Retype password</span> <input type="password" name="retypepass" id="retypepass" class="right" /><br class="clear" /></li>
						<li><input type="submit" id="cpassword" name="cpass" class="g-button green left" value="Change Password"/><br class="clear" /></li>
					</ul>
					</form>
			</div>
		</div>
		<br class="clear" />
		<!--end of wrapper (Important )//-->
	</div>
</div>