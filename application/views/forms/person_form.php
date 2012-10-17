

<?php  echo isset($person) ? form_open( 'profile/save/'.$person['id']): form_open('profile/save') ?>

	<table>
		<tr>									
			<td> First Name: </td>
			<td> <input type="text" name="firstname" value="<?php if(isset($person)) echo $person['firstname'] ?>" /> </td>
		</tr>
		<tr>
			<td> Middle Name: </td>
			<td> <input type="text" name="middlename" value="<?php if(isset($person)) echo $person['middlename'] ?>" /> </td>
		</tr>
		<tr>
			<td> Last Name: </td>
			<td> <input type="text" name="lastname" value="<?php if(isset($person)) echo $person['lastname'] ?>" /> </td>
		</tr>
		<tr>
			<td> Name Extension: </td>
			<td> 
				<select name="extensionname">
					<option>--</option>
					<option>Jr.</option>
					<option>Sr.</option>
				</select>	
			</td>
		</tr>
		<tr>
			<td> Birthday: </td>
			<td> <input type="text" name="birthday" value="<?php if(isset($person)) echo $person['birthday'] ?>" > </td>
		</tr>
		<tr>
			<td> Birthplace: </td>
			<td> <input type="text" name="birthplace" value="<?php if(isset($person)) echo $person['birthplace'] ?>" /> </td>
		</tr>
		<tr>
			<td> Gender: </td>
			<td>
				<select name="gender">
					<option>Male</option>
					<option>Female</option>
				</select>	
			</td>
		</tr>
		<tr>
			<td> Civil Status: </td>
			<td>  
				<select name="civilstatus">
					<option>Single</option>
					<option>Married</option>
					<option>Widowed</option>
				</select>		
			</td>
		</tr>
		<tr>
			<td> Residence: </td>
			<td> <input type="text" name="residence" value="<?php if(isset($person)) echo $person['residence'] ?>" /> </td>
		</tr>
	</table>
	<br />
	<table>
		<tr>
			<td> Mother: </td>
			<td> <input type="text" name="mother" value="<?php if(isset($mother)) echo $mother['fullname'] ?>" /> </td>
		</tr>
		<tr>
			<td> Residence: </td>
			<td> <input type="text" name="mother_residence" value="<?php if(isset($mother)) echo $mother['residence'] ?>" /> </td>
		</tr>
		<tr>
			<td> Father: </td>
			<td> <input type="text" name="father" value="<?php if(isset($father)) echo $father['fullname'] ?>" /> </td>
		</tr>
		<tr>
			<td> Residence: </td>
			<td> <input type="text" name="father_residence" value="<?php if(isset($father)) echo $father['residence'] ?>" /> </td>
		</tr>
	</table>
	<?php echo form_submit(array('class'=>'btn', 'value'=> isset($person) ? 'Update' : 'Add')); ?>
<?php form_close(); ?>