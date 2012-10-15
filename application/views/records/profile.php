

<table>
	<tr>
		<td> First Name: </td>
		<td> <?php echo $firstname ?> </td>
	</tr>
	<tr>
		<td> Middle Name: </td>
		<td> <?php echo $middlename ?> </td>
	</tr>
	<tr>
		<td> Last Name: </td>
		<td> <?php echo $lastname ?> </td>
	</tr>
	<tr>
		<td> Name Extension: </td>
		<td> <?php echo $extensionname ?> </td>
	<tr>
		<td> Birthday: </td>
		<td> <?php echo $birthday ?> </td>
	</tr>
	<tr>
		<td> Birthplace: </td>
		<td> <?php echo $birthplace?> </td>
	</tr>
	<tr>
		<td> Gender: </td>
		<td> <?php echo $gender ?> </td>
	</tr>
	<tr>
		<td> Civil Status: </td>
		<td> <?php echo $civilstatus ?> </td>
	</tr>
	<tr>
		<td> Residence: </td>
		<td> <?php echo $residence ?> </td>
	</tr>
</table>

<?php echo anchor('profile/edit/'.$id, 'Edit'); ?>