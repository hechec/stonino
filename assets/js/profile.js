

$(document).ready(function(){
	
		$('.record-title').click(function(){
			var id = $(this).attr('id');
			
			if( $('.'+id).is(':visible') )
				$('.'+id).slideUp('fast');
			else	
				$('.'+id).slideDown('fast');
			
			//alert( $(this).attr('id') );
		});
		
		$('.baptismal_edit').bind('click', function(){
			var id = $(this).attr('id');
			$.ajax({
		        type: "POST",
		        url: "../../profile/editBaptismal",   // weird url, but it works :)
		        dataType: 'json',
		        data: { id: id },
		        success: function(data){
		        	  $('#baptismal-div').html(data.html);
		        }
		    });
		});
		
	
});