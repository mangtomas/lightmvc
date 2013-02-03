function ajax(){
var xmlhttp = "";

	if (window.ActiveXObject){
		xmlhttp = new ActiveXObject("microsoft.XMLHTTP");
	} else {
		xmlhttp = new XMLHttpRequest();
	}
	
	return xmlhttp;
}

function checkf(){
with (window.document.empadd){
	if (salary.value==""){
		alert("Invalid Salary Input!");
		salary.focus();
		return false;
	} else if (lname.value == ""){
		alert("Last name must be filled out!");
		lname.focus();
		return false;
	} else if (fname.value =="" ){
		alert("Firstname is should not be empty!");
		fname.focus();
		return false;
	} else if (mname.value ==""){
		alert("Middle name must have a value!");
		mname.focus();
		return false;
	} else if(age.value=="") {
		alert("Invalid Age value!");
		age.focus();
		return false;
	} else if(addr.value==""){
		alert("You must fill out the address!");
		addr.focus();
		return false;
	} else if(cnumber.value==""){
		alert("Invalid Contact Number!");
		cnumber.focus();
		return false;
	}
}
}

function genUname(fnameval,empCount){
	lname = document.getElementById('lname');
	document.getElementById('uname').readOnly = true;
	document.getElementById('pword').readOnly = true;
	document.getElementById('uname').value = lname.value.substring(0,1)+fnameval+"_"+empCount;
	document.getElementById('pword').value = lname.value.substring(0,1)+fnameval+"_"+empCount;
}

function enb(){
	var btn = document.getElementById('edt');
		if (btn.value=="Modify"){
			//therefore we must enable the fields for modification and change the btn value to save changes
			btn.value = "Save Changes";
			//then show the cancel button
			$("#cn").show();
		with (window.document.acc){
			fname.readOnly = false;
			lname.readOnly = false;
			fname.focus();
		}
			return false;
		} else {
			return true;
		}
}
function validate(){
	var dep = $('#dept').val();
	var jobp = $('#jobp').val();
	var sal = $('#sal').val();
	var lname = $('#lname').val();
	var fname = $('#fname').val();
	var mname = $('#mname').val();
	var bday = $('#bday').val();
	var age = $('#age').val();
	var addr = $('#address').val();
	var relg = $('#relg').val();
	var gender = $('#gender').val();
	var cnumber = $('#cnumber').val();
	var sss = $('#sss').val();
	var phealth = $('#phealth').val();
	var pagibig = $('#pagibig').val();
	var tin = $('#tin').val();
	
	
if(dep==""){
	alert('Please select Department');
	$('#dep-c').css({'box-shadow':'0 0 3px red'});
	return false;
}else if(jobp==""){
	alert('Please select job position');
	$('#jobpos').css({'box-shadow':'0 0 3px red'});
	return false;
}else if(lname==""){
	$('#lname').css({'box-shadow':'0 0 3px red'}).focus();
	return false
}else if(fname==""){
	$('#fname').css({'box-shadow':'0 0 3px red'}).focus();
	return false
}else if(mname==""){
$('#mname').css({'box-shadow':'0 0 3px red'}).focus();
	return false
}else if(bday==""){
	$('#bday').css({'box-shadow':'0 0 3px red'}).focus();
	return false;

}else if(age==""){
	$('#age').css({'box-shadow':'0 0 3px red'}).focus();
	return false;
}else if(addr==""){
	$('#address').css({'box-shadow':'0 0 3px red'}).focus();
	return false;
}else if(relg==""){
	$('#relg').css({'box-shadow':'0 0 3px red'}).focus();
	return false;
}else if(gender==""){
	$('#gender').css({'box-shadow':'0 0 3px red'}).focus();
	return false;
}else if(cnumber==""){
	$('#cnumber').css({'box-shadow':'0 0 3px red'}).focus();
	return false;
}else if(sss==""){
	$('#sss').css({'box-shadow':'0 0 3px red'}).focus();
	return false;
}else if(phealth==""){
	$('#phealth').css({'box-shadow':'0 0 3px red'}).focus();
	return false;
}else if(pagibig==""){
	$('#pagibig').css({'box-shadow':'0 0 3px red'}).focus();
	return false;
}else if(tin==""){
	$('#tin').css({'box-shadow':'0 0 3px red'}).focus();
	return false;
}
}

function addmore(){
	var x = "<p><input type='text' name='pos[]' class='inp-search'  /></p>";
	$('#addmorespan').append(x);

}
