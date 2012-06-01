
$(document).ready(function(){
	
	/**
		 * create event validation 
		 */
		$('#create-event').click(function() {
			
			var title = $('#create-event-title').val();
			var description = $('#create-event-description').val();
			var start_date = $('#startdate').val();
			var end_date = $('#enddate').val();
			var isValid = true;
			
			if( !isDate( $.trim(end_date), '-' ) ) {
				$('#enddate').focus();
				
				$('#create-event-enddate-error').html('Invalid end date');
				isValid = false;
			}
			
			else {
				$('#create-event-enddate-error').html('');
			}
			
			if( !isDate( $.trim(start_date), '-' ) ) {
				$('#startdate').focus();
				$('#create-event-startdate-error').html('Invalid start date');
				isValid = false;
			}
			else {
				$('#create-event-startdate-error').html('');
			}
			
			if( end_date < start_date ) {
				$('#create-event-enddate-error').html('Invalid end date.');
				isValid = false;
			}
			else {
				$('#create-event-enddate-error').html('');
			}
			
			if( $.trim(description) == '') {
				$('#create-event-description').focus();
				$('#create-event-description-error').show();
				isValid = false;
			}
			else {
				$('#create-event-description-error').hide();
			}
			
			if( $.trim(title) == '') {
				$('#create-event-title').focus();
				$('#create-event-title-error').show();
				isValid = false;
			}
			else {
				$('#create-event-title-error').hide();
			}
			
			
			return isValid;
		});
		
		
});
