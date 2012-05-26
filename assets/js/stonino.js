	
	$(document).ready(function(){
		
		/**
		 *  initialize event calendar 
		 */
		$('#calendar').fullCalendar({
			
			events: "events/getEvents",
			
			selectable: true,
			selectHelper: true,
			
			dayClick: function(date, allDay, jsEvent, view) {
		       resetCreateEvent( $.fullCalendar.formatDate(date, "yyyy-MM-dd") );
		      
		    },
		    
			eventClick: function(calEvent, jsEvent, view) {
				viewEvent(calEvent.eventID);
		    },
		   
			loading: function(bool) {
				if (bool) {
					$('#loading').show();
				}
				else $('#loading').hide();
			}
		});
		
		$('#add-event-one-button').click(function(){
			resetCreateEvent( '' );
		});
		
		/**
		 *  dialog close 
		 */
		
		$('#dialog .dialog-close').click(function(){
			$('#dialog').hide();
			$('#dialog-overlay').hide();
		});
		
	});
	
	
	function viewEvent(eventID) {
		
		$.ajax({
	        type: "POST",
	        url: "events/get",
	        dataType: 'json',
	        data: {id: eventID},
	        success: function(data){
	            $('#dialog #dialog-content').html(data.html);	
	            setEventView(data.isCreator, data.creator); 
	            showDialog(); 
	        }
	    });
		
	}
	
	function setEventView(isCreator, creator) {
		if( !isCreator ) {
			$('#create-event-title').attr('disabled', 'disabled');
			$('#create-event-description').attr('disabled', 'disabled');
			$('#startdate').attr('disabled', 'disabled');
			$('#enddate').attr('disabled', 'disabled');
			$('#create-event').hide();
			$('.create-event-btn').css('text-align', 'left');
			$('.create-event-btn').css('font-size', '13px');
			$('.create-event-btn').css('color', 'gray');
			$('.create-event-btn').html('created by: '+creator);
		}
	}
	
	function resetCreateEvent(start_date) {
		
		$.ajax({
	        type: "POST",
	        url: "events/newEvent",
	        dataType: 'json',
	        success: function(data){
	        	if( data.isLoggedIn ) 
	            	 $('#dialog #dialog-content').html(data.html);	
	            else
	           		$('#dialog #dialog-content').html('<p>You are not logged in.</p>');
	            showDialog();
	            
	            $('#create-event-title').val('');
				$('#create-event-title').attr('disabled', false);
				$('#create-event-title').focus();
				$('#create-event-description').val('');
				$('#startdate').val(start_date);
				$('#enddate').val(start_date);
				$('#create-event-description').attr('disabled',  false);
				$('#startdate').attr('disabled',  false);
				$('#enddate').attr('disabled',  false);
				$('#create-event').show();
				$('#create-event').attr('value', 'CREATE');	
				$('.create-event-error').hide();
				$('#create-event-enddate-error, #create-event-startdate-error').html('');
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
	
	function isDate(txtDate, separator) {
	    var aoDate,           // needed for creating array and object
	        ms,               // date in milliseconds
	        month, day, year; // (integer) month, day and year
	    // if separator is not defined then set '/'
	    if (separator === undefined) {
	        separator = '/';
	    }
	    // split input date to month, day and year
	    aoDate = txtDate.split(separator);
	    // array length should be exactly 3 (no more no less)
	    if (aoDate.length !== 3) {
	        return false;
	    }
	    // define month, day and year from array (expected format is m/d/yyyy)
	    // subtraction will cast variables to integer implicitly
	    month = aoDate[1] - 1; // because months in JS start from 0
	    day = aoDate[2] - 0;
	    year = aoDate[0] - 0;
	    // test year range
	    if (year < 1000 || year > 3000) {
	        return false;
	    }
	    // convert input date to milliseconds
	    ms = (new Date(year, month, day)).getTime();
	    // initialize Date() object from milliseconds (reuse aoDate variable)
	    aoDate = new Date();
	    aoDate.setTime(ms);
	    // compare input date and parts from Date() object
	    // if difference exists then input date is not valid
	    if (aoDate.getFullYear() !== year ||
	        aoDate.getMonth() !== month ||
	        aoDate.getDate() !== day) {
	        return false;
	    }
	    // date is OK, return true
	    return true;
	}
	