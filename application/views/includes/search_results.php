
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/records.css"></link>



<?php
	$i = 0;	
	foreach($results as $person): 
		if( $i%2==0 )
			$str = "even";
		else
			$str = "odd";
	?>
	
	<div class="result-one-<?php echo $str ?> clearfix"> 
		<div class="info"> <?php echo $person['firstname']." ".$person['middlename']." ".$person['lastname']; ?> </div>
		<div class="res-nav"><?php echo anchor('profile/index/'.$person['id'], 'view profile') ?></div>
	</div>

<?php $i++; endforeach; ?>	 