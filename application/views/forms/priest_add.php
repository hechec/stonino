
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/home.js" ></script>

<div class="add-priest-form">
		<?php echo $type === 'NEW' ? form_open_multipart('home/addpriest') : form_open_multipart('home/updatepriest') ?> 
			<p class="create-priest-desc-label">Fullname:</p>
			<p><input type="text" name="fullname" id="priest_fullname" class="input fullname" value="<?php if( isset($fullname) ) echo $fullname; ?>" /></p>
			
			<table class="startend">
				<tr>
					<td style="width:170px;">Start Date:</td>
					<td>End Date:</td>
				</tr>
				<tr>
					<td><input type="text" name="startdate" id="priest_startdate" class="input" placeholder="yyyy-mm-dd" value="<?php if( isset($startdate) ) echo $startdate; ?>" /></td>
					<td><input type="text" name="enddate" id="priest_enddate" class="input" placeholder="yyyy-mm-dd" value="<?php if( isset($enddate) ) echo $enddate; ?>" /></td>
				</tr>
				<tr>
				</tr>
			</table>
			
			<p class="create-priest-desc-label">Photo:</p>
			<p><input type="file" name="userfile" id="priest-photo" /> </p>
			<p class="priest-preview">
				
				<?php if( isset($photo) ): ?>
					<img src="<?php echo base_url()."assets/images/priests/".$photo; ?>" />
				<?php endif; ?>
			</p>
			<p class="priest-submit-p"><?php echo form_submit(array( 'value'=> $type == 'NEW' ? 'CREATE':'UPDATE', 'class'=>'btn', 'id' => 'priest_submit' )); ?></p>
		</form>
</div>