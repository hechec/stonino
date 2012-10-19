<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/stonino.js" ></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery-1.5.2.min.js'></script>


<div>
    <div class="left-container">
    	<div class="current-priest-div">
    		<div class="image-div">
    			<img src="<?php echo base_url(); ?>assets/images/no-image.jpg" />
    			<h4>Firstname M.I. Lastname</h4>
    			<p><i>2010 - present</i></p>
    		</div>
    	</div>
    	<br />
    	<div>
    		
    		<div class="prev-priest-header"> 
    			<span class="prev-priest-label">Previous Priests</span> 
    			<?php if($loginstatus === TRUE): ?> 
    				<span class="add-priest-span"> <input type="button" value="+Add Priest" id="add-priest-button" /> </span> 
    			<?php endif; ?>
    		</div>
    		
    		<?php foreach($results as $priest): 
    				$filename = $priest->photo_filename == '' ? 'default.jpg' : $priest->photo_filename;
    			?>
    			<div class="prev-priest-div clearfix">
	    			<div class="image-div">
	    				<img src="<?php echo base_url()."assets/images/priests/".$filename  ?>" />
	    			</div>
	    			<div class="info-div">
	    				<h4><?php echo  $priest->fullname ?> 
	    					<?php if($loginstatus === TRUE && $this->session->userdata('usertype') === 'admin'): ?> 	
	    						<span class="edit-priest-span">
	    								<a href="javascript:void()" class="edit-priest" id="<?php echo $priest->id; ?>">edit</a> 
	    								<?php echo anchor('home/deletePriest/'.$priest->id, 'del', array('class' => 'delete-priest')); ?>
	    					<?php endif; ?>	
	    				</h4>
	    				<p><i><?php echo $priest->start_date." - ".$priest->end_date ?></i></p>
	    			</div>
	    		</div>
    		<?php endforeach; ?>
    		<p><?php echo $links; ?></p>
    	</div>
    </div>
    
    
    <div class="right-container">
       <p>Upcoming Events</p>
       
       <?php foreach ($events as $key => $event): ?>
		  <div class="upcoming-event-item clearfix">
		   		<div class="event-date">
		   			<strong><?php echo date('d', strtotime($event['start_date'])); ?></strong>
		   			<?php echo date('M', strtotime($event['start_date'])); ?>
		   		</div>
		   		<div class="event-info">
		   			<h2><?php echo $event['title']; ?></h2>
		   			<p><?php echo $event['details']; ?></p>
		   		</div>	
		  </div>    
       <?php endforeach; ?>
	   <?php echo anchor('events', 'see all'); ?>		     	
    </div>
</div>

<?php
	$this->load->view('includes/dialog.php')
?>