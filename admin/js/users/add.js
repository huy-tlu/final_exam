$(document).ready(function(){
	$('#submit').click(function(){
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: '?m=users&a=add',
			data: {
				'user_name': $('input[name="txtUser"]').val(),
				'email': $('input[name="txtEmail"]').val(),
				'user_level': $('input[name="txtLevel"]').val(),
				'status': $('input[name="txtStatus"]').val(),
				'password': $('input[name="txtPwd"]').val(),
			},
			complete: function() {
				// When AJAX call is complete, will fire upon success or when error is thrown
				window.location.href="?m=users&a=list";
			}
		});
	});
});