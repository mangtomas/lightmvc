<div class="container">
	<div class="wrapper minh" id="login">
			
			<div id="emp_pics" class="left">
					<h1 class="title">Welcome!</h1>
					<img src="<?=base_url()."public/images/welcome.png";?>" />
			</div>
					
			<form action="<?=base_url()."main/login";?>" method="POST" id="login_frm" class="left">
				<h1 class="title" style="color:gray">Login</h1>
				<?=(isset($error))? "<p class='error'>".$error."</p>": null;?>
				<p>Username<br /><input type="text" name="username" class="inp" id="uname" autofocus="autofocus"/></p>
				<p>Password<br /><input type="password" name="password" class="inp" /></p>
				<p><input type="submit" class="g-button green" value="login" name="userlogin" /></p>
				<a href="<?=base_url()."main/forgot";?>">Forgot password</a>
			</form>
			<br class="clear" />
	</div>
</div>