

<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/records.css"></link>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/records.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery-1.5.2.min.js'></script>

<div class="records-div">
	
	<div class="search-div"> 
		<label> Search: </label> <input type="text" id="namesearch">
	</div>
	<br />
	<div class="">
		<div class="res-count">Results: 0</div>
		<div class="add-div">
			<?php echo anchor('profile/add', 'add'); ?>
		</div>
	</div>
	<hr class="hr" style ="clear: both"/>
	
	<p id="sample"></p>
	<div class="results-all">
				
	</div>	
	
	<hr class="hr" />
	<div class="">
		<div class="res-count">Results: 0</div>
	</div>
</div>