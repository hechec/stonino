

$(document).ready(function(){
		
		$('.baptismal_edit').bind('click', function(){
			var id = $(this).attr('id');
			$.ajax({
		        type: "POST",
		        url: "../../baptismal/editBaptismal",   // weird url, but it works :)
		        dataType: 'json',
		        data: { id: id },
		        success: function(data){
		        	  $('#baptismal-div').html(data.html);
		        },
		         error: function(){alert('error');}
		    });
		});
		
});