<div class="container" id="menu-con">
	<div class="wrapper">
			<ul id="dash-b">
					<li><a href="<?=base_url()."account/settings/";?>" class="g-button green"><i class="icon-white icon-info-sign"></i> Account information</a></li>
				</ul>
	</div>
</div>
<div class="container" id="admin">
	<div class="wrapper minh">
					<h1 class="title2"><span>Account Settings</span></h1>
							
					<div class="thebox">
					
					<h1 class="title2"><span>Change password</span></h1>
						<form action="<?=base_url()."account/changepass";?>" method="POST">
							<p>Old password <br /><input type="password" name="oldpass" class="chp"/></p>
							<p>New password <br /><input type="password" name="newpass" class="chp"/></p>
							<p>Retype password <br /><input type="password" name="retypepass" class="chp"/></p>
							
							<input type="submit" value="Change" name="change" class="g-button green"/>
						</form>
					</div>						
						
	</div>
</div>