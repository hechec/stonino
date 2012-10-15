
$(document).ready(function(){
	
	
	/**
	 *	search person 
	 */
	$('#namesearch').bind('keyup', function(){ 
		
		var query = $('#namesearch').attr('value');
		
		$.ajax({
	        type: "POST",
	        url: "search/searchMe",
	        dataType: 'json',
	        data: {query: query},
	        success: function(data){
	        	$('.results-all').html(data.html);
	        }
	    });
		
	});
	
	
});