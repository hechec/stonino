

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/records/record_ajax.js" ></script>


<?php echo isset($edit) ? '' : form_open('profile/saveBaptismal/'.$id) ?>

<table>
	<tr>
		<td>
			<table>
				<tr>
					<td> Baptismal Date: </td>
					<td> <input type="text" name="baptism_date" id="baptism_date" value="<?php if(isset($edit)) echo $baptismal['baptism_date'] ?>" /> </td>
				</tr>
				<tr>
					<td> Legitimacy: </td>
					<td>
						<select name="legitimacy" id="legitimacy">
							<option <?php if($baptismal['legitimacy'] == 'Legitimate' ) echo "selected" ?> > Legitimate </option>
							<option <?php if($baptismal['legitimacy'] == 'Illegitimate' ) echo "selected" ?> > Illegitimate </option>
						</select>
					</td>
				</tr>
				<tr>
					<td> Minister: </td>
					<td> <input type="text" name="minister" id="minister" value="<?php if(isset($edit)) echo $baptismal['minister'] ?>" /> </td>
				</tr>
				<tr>
					<td> Remarks: </td>
					<td> <input type="text" name="remarks" id="remarks" value="<?php if(isset($edit)) echo $baptismal['remarks'] ?>" /> </td>
				</tr>
				<tr>
					<td> Book Number: </td>
					<td> <input type="text" name="book_number" id="book_number" value="<?php if(isset($edit)) echo $baptismal['book_number'] ?>" /> </td>
				</tr>
				<tr>
					<td> Page Number: </td>
					<td> <input type="text" name="page_number" id="page_number" value="<?php if(isset($edit)) echo $baptismal['page_number'] ?>" /> </td>
				</tr>
				<tr>
					<td> Line Number: </td>
					<td> <input type="text" name="line_number" id="line_number" value="<?php if(isset($edit)) echo $baptismal['line_number'] ?>" /> </td>
				</tr>
			</table>
		</td>
		<td width="100"></td>
		<td valign="top">
			<table>
				<tr>
					<td> Godparent(1): </td>
					<td> <input type="text" name="godparent_1" id="godparent_1" value="<?php echo $baptismal_godparent_1['fullname'] ?>" /> </td>
				</tr>
				<tr>
					<td> Residence(1): </td>
					<td> <input type="text" name="residence_1" id="residence_1" value="<?php echo $baptismal_godparent_1['residence'] ?>" /> </td>
				</tr>
				<tr>
					<td> Godparent(2): </td>
					<td> <input type="text" name="godparent_2" id="godparent_2" value="<?php echo $baptismal_godparent_2['fullname'] ?>" /> </td>
				</tr>
				<tr>
					<td> Residence(2): </td>
					<td> <input type="text" name="residence_2" id="residence_2" value="<?php echo $baptismal_godparent_2['residence'] ?>" /> </td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<?php 
	$classes = isset($edit) ? 'baptismal_update btn' : 'baptismal_add btn';
	echo form_submit(array('class'=> $classes, 'value'=> isset($edit) ? 'Update' : 'Add', 'id' => $id)); 
?>

<?php form_close(); ?>
