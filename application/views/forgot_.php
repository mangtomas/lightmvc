<div class="container">
	<div class="wrapper minh" id="login">
			
			<div id="emp_pics" class="left">
					<h1 class="title">Welcome!</h1>
					<img src="<?=base_url()."public/images/welcome.png";?>" />
			</div>
					
			<form action="<?=base_url()."main/forgot";?>" method="POST" id="login_frm" class="left">
				<h1 class="title" style="color:gray">Forgot password</h1>
				<?=(isset($error))? "<p class='error'>".$error."</p>": null;?>
				<p>Enter your Cellphone Number<br /><input type="text" name="cpn" class="inp" id="cpn" autofocus="autofocus"/></p>
				<p><input type="submit" class="g-button green" value="Forgot password" name="userforgot" /></p>
				<a href="<?=base_url()."main/login";?>">Login</a>
			</form>
			<br class="clear" />
	</div>
</div>