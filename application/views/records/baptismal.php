

<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/records.css"></link>

<div class="records-left"> <?php $this->load->view('records/nav'); ?></div>

<div class="records-right">
	<p>baptismal</p>
	
	<div class="search-div"> 
		<label>Search:</label><input type="text"><label>by:</label> 
		<select></select> 
	</div>
	<br />
	<div class="add-div"><input type="button" value="Add"></div>
	<hr class="hr"/>
	
	<div class="results-all">
		
		<?php for( $i = 0; $i < 4; $i++ ): 
			if( $i%2==0 )
				$str = "even";
			else
				$str = "odd";	
		?>
			<div class="result-one-<?php echo $str ?> clearfix"> 
				<div class="">Harvey Jake G. Opena</div>
			</div>
		<?php endfor; ?>
		
	</div>	
	
	<hr class="hr"/>
</div>