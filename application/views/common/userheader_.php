<!Doctype html>
<html lang="eng">
<head>
<link href="<?=base_url()."public/css/font.css";?>" type="text/css" rel="stylesheet" media="all">
<link href="<?=base_url()."public/css/user-default.css";?>" type="text/css" rel="stylesheet" media="all">
<link href="<?=base_url()."public/css/g-buttons.css";?>" type="text/css" rel="stylesheet" media="all">
<link href="<?=base_url()."public/css/global.css";?>" type="text/css" rel="stylesheet" media="all">
<link href="<?=base_url()."public/css/jquery-ui-1.8.23.custom.css";?>" type="text/css" rel="stylesheet" media="all">
<style type="text/css">
<!--
/*Your style here*/
-->
</style>
<script type="text/javascript" src="<?=base_url()."public/js/jquery-1.8.1.js"?>"></script>
<script type="text/javascript" src="<?=base_url()."public/js/user_custom.js"?>"></script>
<script type="text/javascript" src="<?=base_url()."public/js/jquery-ui-1.8.23.custom.min.js"?>"></script>
<script type="text/javascript" src="<?=base_url()."public/js/bootstrap-dropdown.js"?>"></script>
<script type="text/javascript">
/*Your script here*/
var host = '<?=base_url();?>';

</script>

<title>Welcome to <?=$user;?></title>
</head>
<body>
<div class="container" id="header">
	<div class="wrapper">
		<img src="<?=base_url()."public/images/universal_logo.jpg"; ?>" width="50" height="50" class="left" /><h1 class="left" id="cname" class="ttle">Universal Commercial Corporation</h1>
		<p class="right" style="color:gray">Welcome <?=$user;?> <a href="<?=base_url()."users/settings";?>" class="g-button mini blue usettings">Account settings</a><a href="<?=base_url()."main/logout";?>" class="usettings g-button mini red">Logout</a></p>
		<br class="clear"/>
		</div>
		</div>
<div class="container" id="u-menu">
			<div class="wrapper">
	<ul id="guest-menu">
		<li><a href="<?=base_url()."users/";?>">Home</a></li>
	</ul>
	
	</div>
</div>
	<!---start of user wrapper//-->
<div class="container" id="user-compensation">
	<div class="wrapper" id="u-main">
		
		
		<div id="nav" class="left">
				
		
			<ul id="parent">
				<li><a href="<?=base_url()."users/leave";?>">Leave</a> 
					<ul class="parent-child">
						<li><a href="<?=base_url().'users/sick';?>">Sick</a></li>
						<li><a href="<?=base_url().'users/vacation';?>">Vacation</a></li>
					</ul>
				</li>
				<li><a href="<?=base_url()."users/contributions";?>">Contributions</a>
					<ul class="parent-child">
						<li>Philhealth</li>
						<li>Pag-ibig</li>
						<li>SSS</li>
					</ul>
				</li>
				<li>Bonuses
					<ul class="parent-child">
						<li>13th Month Pay</li>
						<li>No Absent</li>
					</ul>
				</li>
				<li>Others
					<ul class="parent-child">
						<li>Retirement Plan</li>
						<li>Hospitalization</li>
					</ul>
				</li>
			
			</ul>
		</div>	


