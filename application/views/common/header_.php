<!Doctype html>
<html lang="eng">
<head>
<link href="<?=base_url()."public/css/font.css";?>" type="text/css" rel="stylesheet" media="all">
<link href="<?=base_url()."public/css/default.css";?>" type="text/css" rel="stylesheet" media="all">
<link href="<?=base_url()."public/css/global.css";?>" type="text/css" rel="stylesheet" media="all">
<link href="<?=base_url()."public/css/g-buttons.css";?>" type="text/css" rel="stylesheet" media="all">

<style type="text/css">
<!--
/*Your style here*/
-->
</style>
<script type="text/javascript" src="<?=base_url()."public/js/jquery-1.8.1.js";?>"></script>
<script type="text/javascript">
/*Your script here*/
var currenttime = "<?php echo date("F d, Y H:i:s", time())?>"; //PHP method of getting server date

///////////Stop editting here/////////////////////////////////

var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
var serverdate=new Date(currenttime);

function padlength(what){
var output=(what.toString().length==1)? "0"+what : what;
return output;
}

function displaytime(){
serverdate.setSeconds(serverdate.getSeconds()+1);
var datestring=montharray[serverdate.getMonth()]+" "+padlength(serverdate.getDate())+", "+serverdate.getFullYear();
var timestring=padlength(serverdate.getHours())+":"+padlength(serverdate.getMinutes())+":"+padlength(serverdate.getSeconds());
document.getElementById("clock").innerHTML=datestring+" "+timestring;

}
window.onload=function(){
//setInterval("displaytime()", 1000);
}
</script>
</head>
<body>

<div class="container" id="header">
		<div class="wrapper">
				<img src="<?=base_url()."public/images/universal_logo.jpg";?>" alt="Universal Commercial Corporation Logo" />
			<h1>Universal Commercial Corporation</h1>
		</div>
</div>


