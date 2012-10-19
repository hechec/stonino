

<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/profile.css"></link>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/profile.js" ></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery/jquery-1.5.2.min.js'></script>
 
 
<table>
	<tr>
		<td>
			<table>
				<tr>
					<td> First Name: </td>
					<td> <?php echo $person['firstname'] ?> </td>
				</tr>
				<tr>
					<td> Middle Name: </td>
					<td> <?php echo $person['middlename'] ?> </td>
				</tr>
				<tr>
					<td> Last Name: </td>
					<td> <?php echo $person['lastname'] ?> </td>
				</tr>
				<tr>
					<td> Name Extension: </td>
					<td> <?php echo $person['extensionname'] ?> </td>
				<tr>
					<td> Birthday: </td>
					<td> <?php echo $person['birthday'] ?> </td>
				</tr>
				<tr>
					<td> Birthplace: </td>
					<td> <?php echo $person['birthplace'] ?> </td>
				</tr>
				<tr>
					<td> Gender: </td>
					<td> <?php echo $person['gender'] ?> </td>
				</tr>
				<tr>
					<td> Civil Status: </td>
					<td> <?php echo $person['civilstatus'] ?> </td>
				</tr>
				<tr>
					<td> Residence: </td>
					<td> <?php echo $person['residence'] ?> </td>
				</tr>
			</table>
		</td>
		<td valign="top">
			<table>
				<tr>
					<td> Mother: </td>
					<td> <?php echo $mother['fullname'] ?> </td>
				</tr>
				<tr>
					<td> Residence: </td>
					<td> <?php echo $mother['residence'] ?> </td>
				</tr>
				<tr>
					<td> Father: </td>
					<td> <?php echo $father['fullname'] ?> </td>
				</tr>
				<tr>
					<td> Residence: </td>
					<td> <?php echo $father['residence'] ?> </td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<?php echo anchor('profile/edit/'.$person['id'], 'Edit', array('class' => 'btn')); ?>


<br /><br />

<div class="record-title" id="baptismal"> Baptismal </div>
<div class="baptismal" style="display: none;border: 2px #ccc solid;">
	<div style=" width: 946px; margin: 0px auto;" id="baptismal-div"> <?php echo $baptismal ?> </div>
</div>

<div class="record-title" id="confirmation"> Confirmation </div>
<div class="confirmation" style="display: none">
	<div style=" width: 946px; margin: 0px auto;" id="confirmation-div"> <?php echo $confirmation ?> </div>
</div>

<div class="record-title" id="marriage"> Marriage </div>



