

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/records/record_ajax.js" ></script>


<?php echo isset($edit) ? '' : form_open('baptismal/save2/'.$id) ?>

<table>
	<tr>
		<td>
			<table>
				<tr>
					<td> Baptismal Date: </td>
					<td> <input type="text" name="baptism_date" id="baptism_date_id" value="<?php if(isset($edit)) echo $baptismal['baptism_date'] ?>" /> </td>
				</tr>
				<tr>
					<td> Legitimacy: </td>
					<td>
						<select name="bap_legitimacy" id="legitimacy_id">
							<option <?php if($baptismal['legitimacy'] == 'Legitimate' ) echo "selected" ?> > Legitimate </option>
							<option <?php if($baptismal['legitimacy'] == 'Illegitimate' ) echo "selected" ?> > Illegitimate </option>
						</select>
					</td>
				</tr>
				<tr>
					<td> Minister: </td>
					<td> <input type="text" name="bap_minister" id="minister_id" value="<?php if(isset($edit)) echo $baptismal['minister'] ?>" /> </td>
				</tr>
				<tr>
					<td> Remarks: </td>
					<td> <input type="text" name="bap_remarks" id="remarks_id" value="<?php if(isset($edit)) echo $baptismal['remarks'] ?>" /> </td>
				</tr>
				<tr>
					<td> Book Number: </td>
					<td> <input type="text" name="bap_book_number" id="book_number_id" value="<?php if(isset($edit)) echo $baptismal['book_number'] ?>" /> </td>
				</tr>
				<tr>
					<td> Page Number: </td>
					<td> <input type="text" name="bap_page_number" id="page_number_id" value="<?php if(isset($edit)) echo $baptismal['page_number'] ?>" /> </td>
				</tr>
				<tr>
					<td> Line Number: </td>
					<td> <input type="text" name="bap_line_number" id="line_number_id" value="<?php if(isset($edit)) echo $baptismal['line_number'] ?>" /> </td>
				</tr>
			</table>
		</td>
		<td width="100"></td>
		<td valign="top">
			<table>
				<tr>
					<td> Godparent(1): </td>
					<td> <input type="text" name="godparent_1" id="godparent_1_id" value="<?php if(isset($edit))  echo $baptismal_godparent_1['fullname'] ?>" /> </td>
				</tr>
				<tr>
					<td> Residence(1): </td>
					<td> <input type="text" name="residence_1" id="residence_1_id" value="<?php if(isset($edit))  echo $baptismal_godparent_1['residence'] ?>" /> </td>
				</tr>
				<tr>
					<td> Godparent(2): </td>
					<td> <input type="text" name="godparent_2" id="godparent_2_id" value="<?php if(isset($edit))  echo $baptismal_godparent_2['fullname'] ?>" /> </td>
				</tr>
				<tr>
					<td> Residence(2): </td>
					<td> <input type="text" name="residence_2" id="residence_2_id" value="<?php if(isset($edit))  echo $baptismal_godparent_2['residence'] ?>" /> </td>
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
