
$(document).ready(function(){
$('#fromdatepicker').datepicker();
$('#todatepicker').datepicker();
$('#fleaverror').hide();
	$('#submitleave').click(function(){
		var lve = $('#leaveapply').val();
		var reason = $('#reason').val();
		var uid = $('#uid').val();
		var from = $('#fromdatepicker').val();
		var to = $('#todatepicker').val();
		$.post(host + 'users/request',{submit:'true',uid:uid,leave:lve,rson:reason,fr:from,to:to},function(result){
			if(result==1){
				$('#content').html("<h1>Your leave request is successfull sent</h1><a href='/ucc/users/' class='g-button blue'>Ok</a>");
			}else{
			$('#fleaverror').show();
			$('#fleaverror').html(result)
			}
	});
});

});