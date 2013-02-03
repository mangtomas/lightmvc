<!Doctype html>
<html lang="eng">
<head>
<link href="<?=base_url().'public/css/global.css';?>" type="text/css" rel="stylesheet" media="all">
<link href="<?=base_url().'public/css/g-buttons.css';?>" type="text/css" rel="stylesheet" media="all">
<style type="text/css">
<!--
/*Your style here*/
body{font:12px/1em 'Arial';margin:0;}
#right-nav{padding:9px;width:250px;min-height: 610px;background:rgb(22,81,142);color:#fff;}
#tme{font:bold 62px 'Arial';padding:0;margin: 0}
#dte{font:bold 22px 'Arial';padding:0;margin: 0;text-align: center}
#clock{height:100px;background: #fff;box-shadow: 0 0 5px gray;color: #000}
.inpt{width: 245px;height: 30px;border:1px solid gray;border-radius: 3px}
.cmpny{font:bold 42px/20px 'Arial';}
.cmpny span{font:22px 'Arial';}
#empislogin{border:1px solid gray;border-radius: 5px;height:450px;}

/*
datagrid
*/

.datagrid table { border-collapse: collapse; text-align: left; width: 100%; } 
.datagrid table  a{margin:1px!important} 
.datagrid {font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 3px solid #006699; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; }
.datagrid table td, .datagrid table th { padding: 6px 4px; }
.datagrid table td:last-child, .datagrid table th:last-child {width:120px}
.datagrid table td:first-child, .datagrid table th:first-child {width:50px;border-right:1px solid white;text-align:center}
.datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; color:#FFFFFF; font-size: 13px; font-weight: bold; border-left: 1px solid #0070A8; }
.datagrid table thead th:first-child { border: none; }
.datagrid table tbody td { color: #00557F; font-size: 12px;font-weight: normal; }
.datagrid table tbody .alt td { background: #E1EEf4; color: #00557F; }
.datagrid table tbody td:first-child { border-left: none; }
.datagrid table tbody tr:last-child td { border-bottom: none; }
.datagrid table tfoot td div { border-top: 1px solid #006699;background: #E1EEf4;} 
.datagrid table tfoot td { padding: 0; font-size: 12px } 
.datagrid table tfoot td div{ padding: 2px; }
.datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }
.datagrid table tfoot  li { display: inline; }
.datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #FFFFFF;border: 1px solid #006699;-webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; }
.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #00557F; color: #FFFFFF; background: none; background-color:#006699;}
.datagrid table tr .jtr{width:200px!important;text-align:left}
-->
</style>
<script type="text/javascript" src="<?=base_url()."public/js/jquery-1.8.1.js"?>"></script>
<script type="text/javascript" src="<?=base_url()."public/js/jquery.nicescroll.js"?>"></script>
<script type="text/javascript">
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
document.getElementById("dte").innerHTML=datestring;
document.getElementById("tme").innerHTML=timestring;

}
window.onload=function(){
setInterval("displaytime()", 1000);
}

//jquery section

$(document).ready(function(){
	$('#dtrloginbtn').click(function(){
		$.post('<?=base_url()."dtr/login";?>',{loginme:true},function(result){

		});
	});

	$('#empislogin').niceScroll();
});
</script>
</head>
<body>

<div class="container">
	<div class="wrapper">
		<div class="left">
		<h1 class="cmpny">Universal Commercial Corporation<br /><span>Daily Time Record</span></h1>
		
		<div id="empislogin">
			<div class="datagrid">

		
							<table>
								<thead><tr><th>Emp ID</th><th>Employee Name</th><th>Department</th><th>Login</th><th>Logout</th></tr></thead>


								<tbody>
								<?php
								
								$alt = 0;
								$emp = array('firstname'=>'red');
								foreach($dtr as $key){
								$oddoreven = (($ctr++)%2) ? "alt" : "odd";
								$name = $key['firstname']." ".$key['mid_name']." ".$key['lastname'];
								?>
								<tr class=<?=$oddoreven;?>><td><?=$key['id'];?></td>
							<td><?=$name;?></td>
								
								<td><?=$key['dep_name'];?></td><td><?=$key['_in'];?></td>
								<td><a href="<?=base_url()."employees/delete/".$key['id']; ?>" title="Delete" onclick="return confirm('Are you sure you want to delete <?php echo $name; ?>')" class="g-button red mini no-text"><i class="icon-trash icon-white"></i></a></td>
											
								</tr>
								<?}?>
								</tbody>
								</table>

								<!--<tfoot><tr><td colspan="4"><div id="paging"><ul><li><a href="#"><span>Previous</span></a></li><li><a href="#" class="active"><span>1</span></a></li><li><a href="#"><span>2</span></a></li><li><a href="#"><span>3</span></a></li><li><a href="#"><span>4</span></a></li><li><a href="#"><span>5</span></a></li><li><a href="#"><span>Next</span></a></li></ul></div></tr></tfoot>
								--></div>
		</div>
		</div>
		<div class="right" id="right-nav">
			<div id="clock">
			<h2 id="dte"></h2>
			<h1 id="tme"></h1>
			</div>
			<h1>Welcome</h1>
			<h3>Daily Time Record Login</h3>
			<form action="<?=base_url()."dtr/login";?>" method="POST">
				<?=isset($error) ? $error : null;?>
			<p>Employee username<br /><input type="text" name="empusername" id="empusername"  class="inpt"/></p>
			<p>Password <br /><input type="password" name="emppass" id="emppass" class="inpt"/></p>
			<p><input type="submit" name="dtrlogin" class="g-button" id="dtrloginbtn" value="Login"/></p>
			</form>
		</div>

		<br class="clear" />
	</div>
</div>