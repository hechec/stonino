
<div class="add-priest-form">
		<?php echo form_open_multipart('home/addpriest');?> 
			<p class="create-priest-desc-label">Fullname:</p>
			<p><input type="text" name="fullname" id="priest_fullname" class="input fullname" /></p>
			
			<table class="startend">
				<tr>
					<td style="width:170px;">Start Date:</td>
					<td>End Date:</td>
				</tr>
				<tr>
					<td><input type="text" name="startdate" id="priest_startdate" class="input" placeholder="yyyy-mm-dd" /></td>
					<td><input type="text" name="enddate" id="priest_enddate" class="input" placeholder="yyyy-mm-dd" /></td>
				</tr>
				<tr>
				</tr>
			</table>
			
			<p class="create-priest-desc-label">Photo:</p>
			<p><input type="file" name="userfile" id="priest-photo" /> </p>
			
			<p class="priest-submit-p"><?php echo form_submit(array( 'value' => 'CREATE', 'class'=>'btn', 'id' => 'priest_submit' )); ?></p>
		</form>
</div>