

$(document).ready(function(){

		$('.baptismal_update, .baptismal_add').bind('click', function(e){
			var c = $(this).attr('class');
			c = c.split(" ");
			var action;
			if( c[0] == "baptismal_update" )
				action = "update";
			else if( c[0] == "baptismal_add" )
				action = "add";
			var data = {
						action : action,
						id 			: $(this).attr('id'),
						baptism_date: $('#baptism_date').val(),
						legitimacy 	: $('#legitimacy').val(),
						minister	: $('#minister').val(),
						remarks 	: $('#remarks').val(),
						book_number : $('#book_number').val(),
						page_number : $('#page_number').val(),
						line_number : $('#line_number').val(),
						godparent_1 : $('#godparent_1').val(),
						residence_1 : $('#residence_1').val(),
						godparent_2 : $('#godparent_2').val(),
						residence_2 : $('#residence_2').val(),
						}
			
			
			$.ajax({
		        type: "POST",
		        url: "../../baptismal/saveBaptismal",   // weird url, but it works :)
		        dataType: 'json',
		        data: data,
		        success: function(data){
		        	$('#baptismal-div').html(data.html);
		        },
		        error: function(){alert('error');}
		    });
					
			return false;	        
		});
		
});