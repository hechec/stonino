
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/event.js" ></script>

<div class="create-event-form">
		<?php 
		 	echo  $type === 'NEW' ? form_open('events/createEvent') : form_open('events/updateEvent');
		?>
			<p class="create-event-desc-label">Title:</p>
			<p><input type="text" name="title" class="input title" id="create-event-title" value = "<?php if(isset($title)) echo $title; ?>" /></p>
			<p class="create-event-error" id="create-event-title-error">Please enter a title :)</p>
			<p class="create-event-desc-label">Description:</p>
			<p><textarea class="twitter-anywhere-tweet-box-editor" name="details" id="create-event-description" ><?php if(isset($details)) echo $details; ?></textarea></p>
			<p class="create-event-error" id="create-event-description-error">Please enter a brief description :)</p>
			<table class="create-event-desc-label">
				<tr>
					<td style="width:170px;">Start Date:</td>
					<td>End Date:</td>
				</tr>
				<tr>
					<td><input type="text" class="input" name="start_date" id="startdate" placeholder="yyyy-mm-dd" value="<?php if(isset($start)) echo date('Y-m-d', strtotime($start)); ?>"  /></td>
					<td><input type="text" class="input" name="end_date" id="enddate" placeholder="yyyy-mm-dd" value="<?php if(isset($end)) echo date('Y-m-d', strtotime($end)); ?>"  /></td>
				</tr>
				<tr>
					<td class="create-event-error2" id="create-event-startdate-error"></td>
					<td class="create-event-error2" id="create-event-enddate-error"></td>
				</tr>
			</table>
			<p class="create-event-btn">
				<?php echo form_submit(array('class'=>'btn', 'value'=> $type == 'NEW' ? 'CREATE':'UPDATE', 'id' => 'create-event' ))?> <?php if( $type == 'UPDATE' ) echo anchor('events/deleteEvent/'.$eventID, 'delete'); ?>
			</p>
			<input type="text" name="eventID" value="<?php if(isset($eventID)) echo $eventID?>" style="display: none" />
		<?php form_close(); ?>
	
</div>