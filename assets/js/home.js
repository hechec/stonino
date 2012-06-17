	
	
	$(document).ready(function(){
		
		 $('#priest-photo').live('change', function(){
		 	$('.photo-preview img').attr('src', $('#priest-photo').val());
		 });
			
		$('#add-priest-button').click(function(){
			 $.ajax({
		        type: "POST",
		        url: "home/newPriest",
		        dataType: 'json',
		        success: function(data){
		            $('#dialog #dialog-content').html(data.html);	
		            showDialog();
		        }
		   });
		});
		
		/**
		 *  dialog close 
		 */
		
		$('#dialog .dialog-close').click(function(){
			$('#dialog').hide();
			$('#dialog-overlay').hide();
		});
		
		$('.edit-priest').click(function(){
			var priestID = $(this).attr('id');
			viewPriest(priestID);
		});
	
		$('#priest_submit').click(function(){
			var isValid = true;
			var fullname = $('#priest_fullname').val();
			var startdate = $('#priest_startdate').val();
			var enddate = $('#priest_enddate').val();
			
			if( !isDate( $.trim(enddate), '-' ) ){
				$('#priest_enddate').focus();
				isValid = false;
			}
			else {
				
			}
			
			if( !isDate( $.trim(startdate), '-' ) ){
				$('#priest_startdate').focus();
				isValid = false;
			}
			else {
				
			}
			
			if( $.trim(fullname) == '' ) {
				$('#priest_fullname').focus();
				isValid = false;
			}
			else {
				
			}
			
			return isValid;
		});
	
	});
	
	function newPriest() {
		$.ajax({
	        type: "POST",
	        url: "home/newPriest",
	        dataType: 'json',
	        success: function(data){
	            $('#dialog #dialog-content').html(data.html);	
	            showDialog();
	        }
	   });
	}
	
	function showDialog() {
		
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
		var dialogTop = (maskHeight / 2) - ($('#dialog').height() / 2);
		var dialogLeft = (maskWidth / 2) - ($('#dialog').width() / 2);
		
        var top = $(document).scrollTop() + (($(window).height() - $('#dialog').height())/2 );      
         
		$('#dialog-overlay').css({
			height : maskHeight,// + $(document).scrollTop(),
			width : maskWidth
		}).fadeIn(500);
	
		$('#dialog').css({
			top : top-50,
			left : dialogLeft,
		}).fadeIn(500);
	}
