$(document).ready(function(){
	$('#sub').click(function(){
		var usrname=$('#usrname').val();
		var pass=$('#pass').val();
		$.ajax({
			url:'/login/',
			type:'POST',
			data:{'usrname':usrname,'pass':pass},
			success:function(response)
			{
				if(response=='success')
				{
					window.location.href='/mains/'
				}
				if(response=='no')
				{
					alert('Username Password Mismatch')
				}
			},
			error:function(xhr,textStatus,thrownError)
			{
				alert('error');
			}
		});
	});
}) 