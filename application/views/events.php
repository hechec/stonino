<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/stonino.js" ></script>
<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/css/fullcalendar.css' ></link>
<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/css/fullcalendar.print.css' media='print'></link> 

<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery/jquery-ui-1.8.17.custom.min.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/fullcalendar/fullcalendar.min.js'></script>

<div id="add-event-one"><input type="button" value="Add Event" id="add-event-one-button" /></div>
<div id='calendar'></div>

<?php
	$this->load->view('includes/dialog.php')
?>