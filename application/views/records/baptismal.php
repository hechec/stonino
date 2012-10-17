
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/records/record_edit_show.js" ></script>

<table>
	<tr>
		<td>
			<table>
				<tr>
					<td> Baptismal Date: </td>
					<td> <?php echo $baptismal['baptism_date'] ?> </td>
				</tr>
				<tr>
					<td> Legitimacy: </td>
					<td> <?php echo $baptismal['legitimacy'] ?> </td>
				</tr>
				<tr>
					<td> Minister: </td>
					<td> <?php echo $baptismal['minister'] ?> </td>
				</tr>
				<tr>
					<td> Remarks: </td>
					<td> <?php echo $baptismal['remarks'] ?> </td>
				</tr>
				<tr>
					<td> Book Number: </td>
					<td> <?php echo $baptismal['book_number'] ?> </td>
				</tr>
				<tr>
					<td> Page Number: </td>
					<td> <?php echo $baptismal['page_number'] ?> </td>
				</tr>
				<tr>
					<td> Line Number: </td>
					<td> <?php echo $baptismal['line_number'] ?> </td>
				</tr>
			</table>
		</td>
		<td width="100"></td>
		<td valign="top">
			<table>
				<tr>
					<td> Godparent(1): </td>
					<td> <?php echo $baptismal_godparent_1['fullname'] ?> </td>
				</tr>
				<tr>
					<td> Residence(1): </td>
					<td> <?php echo $baptismal_godparent_1['residence'] ?> </td>
				</tr>
				<tr>
					<td> Godparent(2): </td>
					<td> <?php echo $baptismal_godparent_2['fullname'] ?> </td>
				</tr>
				<tr>
					<td> Residence(2): </td>
					<td> <?php echo $baptismal_godparent_2['residence'] ?> </td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<input type="submit" value="Edit" class="btn baptismal_edit" id="<?php echo $id ?>" />







