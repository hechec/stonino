

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
						baptism_date: $('#baptism_date_id').val(),
						legitimacy 	: $('#legitimacy_id').val(),
						minister	: $('#minister_id').val(),
						remarks 	: $('#remarks_id').val(),
						book_number : $('#book_number_id').val(),
						page_number : $('#page_number_id').val(),
						line_number : $('#line_number_id').val(),
						godparent_1 : $('#godparent_1_id').val(),
						residence_1 : $('#residence_1_id').val(),
						godparent_2 : $('#godparent_2_id').val(),
						residence_2 : $('#residence_2_id').val(),
						}
			
			
			$.ajax({
		        type: "POST",
		        url: "../../baptismal/save",   // weird url, but it works :)
		        dataType: 'json',
		        data: data,
		        success: function(data){
		        	$('#baptismal-div').html(data.html);
		        },
		     	error: function(jqXHR, textStatus, errorThrown){
		     		//
		        }
		    });
					
			return false;	        
		});
		
		$('.confirmation_update, .confirmation_add').bind('click', function(e){
			var c = $(this).attr('class');
			c = c.split(" ");
			var action;
			if( c[0] == "confirmation_update" )
				action = "update";
			else if( c[0] == "confirmation_add" )
				action = "add";
			
			var data = {
						action : action,
						id 			: $(this).attr('id'),
						confirmation_date: $('#confirmation_date').val(),
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
		        url: "../../confirmation/save",   // weird url, but it works :)
		        dataType: 'json',
		        data: data,
		        success: function(data){
		        	$('#confirmation-div').html(data.html);
		        },
		        error: function(xhr, status, error, req){
		        	alert('error :'+error+" status: "+status);
		        }
		    });
		    
			return false;
		});
		
});