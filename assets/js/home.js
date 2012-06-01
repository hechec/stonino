	
	
	$(document).ready(function(){
		
		 $('#priest-photo').live('change', function(){
		 	$('.photo-preview img').attr('src', $('#priest-photo').val());
		 });
			
		$('#add-priest-button').click(function(){
			 showDialog();
		});
		
		/**
		 *  dialog close 
		 */
		
		$('#dialog .dialog-close').click(function(){
			$('#dialog').hide();
			$('#dialog-overlay').hide();
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