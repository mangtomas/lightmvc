<!Doctype html>
<html lang="eng">
<head>
<link href="<?=base_url()."public/css/font.css";?>" type="text/css" rel="stylesheet" media="all">
<link href="<?=base_url()."public/css/style.css";?>" type="text/css" rel="stylesheet" media="all">
<link href="<?=base_url()."public/css/global.css";?>" type="text/css" rel="stylesheet" media="all">
<link href="<?=base_url()."public/css/g-buttons.css";?>" type="text/css" rel="stylesheet" media="all">

<link href="<?=base_url()."public/css/jquery-ui-1.8.23.custom.css";?>" type="text/css" rel="stylesheet" media="all">
<link href="<?=base_url()."public/css/reveal.css";?>" type="text/css" rel="stylesheet" media="all">
<style type="text/css">
<!--
/*Your style here*/
-->
</style>
<script type="text/javascript" src="<?=base_url()."public/js/jquery-1.8.1.js"?>"></script>
<script type="text/javascript" src="<?=base_url()."public/js/jquery-ui-1.8.23.custom.min.js"?>"></script>
<script type="text/javascript" src="<?=base_url()."public/js/jquery.reveal.js"?>"></script>
<script type="text/javascript" src="<?=base_url()."public/js/bootstrap-dropdown.js"?>"></script>
<script type="text/javascript" src="<?=base_url()."public/js/admin_cm.js"?>"></script>


<script type="text/javascript">
$(document).ready(function(){

		//select department
		$('.slectdep').click(function(){
				var t = this.title;
				var id = this.id;
				$('#tdep').html(t);
				$('#fordep').val(id);
				$.post('<?=base_url().'employees/add';?>',{dep:true,id:id},function(data){
				$('#dep-c').css({'box-shadow':'0 0 3px white'});
				$('#sal').val('');
				$('#jobp').val('');
				$('#dept').val(id);
				$('#tjo').html('Select Job position');
				$('#tjob').html(data);
				});
		});
			
		//select birth date
		
		$('#bday').datepicker({changeYear:true,yearRange:'-60',changeMonth:true,dateFormat:'dd-MM-yy',});
		$('#a_search').click(function(){
			var val = $('#search_box').val();
				alert(val);
		});
		
		$('.toview').click(function(){
			id =  this.id;
			$('#tottle').html('Leave Request');
					$.post("<?=base_url().'compensation/leave';?>",{id:id,pst:true},function(data){
					
						$('#opt').html(data);
					});
			});
			
			$('#addmore').click(function(){
				var tr = "<tr><td><input type='text' name='dep_n' class='inp-search'></td></tr>";
				$('#addf').append(tr);
			});
		

		//add pos

		$('#idaddpos').submit(function(){
			alert(1);
			return false;
		});

});
//function select job and salary
 function slectjob(id,sal,slct){
	$('#tjo').html(slct);
	$('#sal').val(sal+" PHP");
	$('#jobp').val(id);
	$('#jobpos').css({'box-shadow':'0 0 3px white'});
		$.post("<?=base_url().'employees/add';?>",{getsal:true,id:id},function(){});
 }
//compute age
 function comp(){
var yr = $('#bday').val();
yr = yr.split('-');
$('#age').val(2012-yr[2]);
		
}
//generate username and password
function genUname(fnameval){
var dt = new Date();
	lname = document.getElementById('lname');
	document.getElementById('regpassword').readOnly = true;
	document.getElementById('regusername').value = lname.value.substring(0,1)+fnameval+"_"+dt.getMonth()+""+dt.getYear();
	document.getElementById('regpassword').value = lname.value.substring(0,1)+fnameval+"_"+dt.getMonth()+""+dt.getYear();
}
//accep leave request
function toccept(id){
	$.post("<?=base_url().'compensation/leave';?>",{id:id,accpt:true},function(data){
		$('#opt').html(data);
	});
}

function to_modf(dep,id){
		var title = "<h1>Department</h1>";
		var close = "<a class='close-reveal-modal g-button red' style='margin:0'>Cancel</a>";
		var conf = "<a href='http://localhost/unicc/jobanddep' class='g-button green' style='margin:0' onClick='tosaveDep("+id+")'>Save</a>";
		var x = title+"<input type='text' id='thisdep' class='to_mfinp' value='"+dep+"' />"+conf+close;
		$('#opt2').html(x);
		
}

function to_modf_pos(dep,id){
		var title = "<h1>Position</h1>";
		var close = "<a class='close-reveal-modal g-button red' style='margin:0'>Cancel</a>";
		var conf = "<a href='<?=base_url().'jobanddep/department/view/'.$current_id;?>' class='g-button green' style='margin:0' onClick='tosavePos("+id+")'>Save</a>";
		var x = title+"<input type='text' id='thispos' class='to_mfinp' value='"+dep+"' />"+conf+close;
		$('#opt2').html(x);
		
}
function tosavePos(bid){
		var val = $('#thispos').val();
		$.post('<?=base_url().'jobanddep/';?>',{modPos:true,new_pos:val,id:bid},function(data){
			
			$('p#forMod_'+bid).html(val);
			
			alert(data);
		});
}

function tosaveDep(bid){
		var val = $('#thisdep').val();
		$.post('<?=base_url().'jobanddep/';?>',{mod:true,new_dep:val,id:bid},function(data){
			
			$('p#forMod_'+bid).html(val);
			
			alert(data);
		});
}

function addPos(){
	$('#opt').load('<?=base_url().'jobanddep/addpos';?>');
}

function thisdep(dep,id){
	$('#tdep').html(dep);
	$('#dep_n').val(id);
}

function validate(){
	var department =$('#dep_n').val();
	if(department==""){
	$('.addposerror').html('Please select Department');
		$('.addposerror').css({'color':'white','background':'red','border-radius':'5px','border':'1px solid red','padding':'3px 5px'});
	return false;
	}
	var res = true;
	 $('[id^="pst"]').each(function(){
	 		if($(this).val().length <=0){
	 			res =  false;
	 		}

	 });

	 if(res==false){
		$('.addposerror').html('Please input Position.');
		$('.addposerror').css({'color':'white','background':'red','border-radius':'5px','border':'1px solid red','padding':'3px 5px'});
	
	 		return false;
	 }
}

</script>

<title>Welcome to Admin</title>
</head>
<body>
<div id="myModal" class="reveal-modal large" style="padding:10px">
			<div id="opt">
			</div>
		<a class="close-reveal-modal mstyle">&#215;</a>
</div>

<div id="myModal2" class="reveal-modal small" style="padding:10px">
			<div id="opt2">
			</div>
		
</div>
<div class="container" id="header">
	<div class="wrapper">
		<img src="<?=base_url()."public/images/universal_logo.jpg"; ?>" width="50" height="50" class="left" style="margin-right:10px"/><h1 class="left">Universal Commercial Corporation</h1>
		<div class="g-button-group tdepcon right" id="" style="margin-top:10px;" >
									  <a class="g-button"  href="#" style="margin:0">
											<span title="Select"><i class="icon-user"></i> <?=$info['lastname'].", ".$info['firstname'];?></span>
									  </a>
									   <a class="g-button dropdown-toggle"  data-toggle="dropdown" href="#" style="margin:0">
											<span class="caret"></span>
									  </a>
									  <ul class="dropdown-menu" >
										<li><a href="<?=base_url()."account/settings";?>" ><i class="icon-info-sign "></i> Account Settings</a></li>
										<li><a href="<?=base_url()."account/benefits";?>" ><i class="icon-star "></i> Benefits Accounts</a></li>
										<!--<li><a href="<?=base_url()."account/changepass";?>" ><i class="icon-cog"></i> Change Password</a></li>-->
										 <li class="divider"></li>
										<li><a href="<?=base_url()."main/logout";?>" ><i class="icon-arrow-right"></i> Logout</a></li>
										
									  </ul>
									</div>
		
		<br class="clear"/>
	</div>
</div>
<div class="container" id="con-menu">
	<div class="wrapper minh">
		<ul id="guest-menu">
		<li><a href="<?=base_url()."admin/";?>">Dashboard</a></li>
		<li><a href="<?=base_url()."employees/";?>">Employees</a></li>
		<li><a href="<?=base_url()."compensation/";?>">Compensation</a></li>
		<li><a href="<?=base_url()."dailytimerecord/";?>">DTR</a></li>
		<li><a href="<?=base_url()."jobanddep/";?>">Departments and Positions</a></li>
		<li><a href="<?=base_url()."reports/";?>">Reports</a></li>
	</ul>
	</div>
</div>

