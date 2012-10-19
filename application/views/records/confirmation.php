
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/records/record_edit_show.js" ></script>

<table>
	<tr>
		<td>
			<table>
				<tr>
					<td> Confirmation Date: </td>
					<td> <?php echo $confirmation['confirmation_date'] ?> </td>
				</tr>
				<tr>
					<td> Minister: </td>
					<td> <?php echo $confirmation['minister'] ?> </td>
				</tr>
				<tr>
					<td> Remarks: </td>
					<td> <?php echo $confirmation['remarks'] ?> </td>
				</tr>
				<tr>
					<td> Book Number: </td>
					<td> <?php echo $confirmation['book_number'] ?> </td>
				</tr>
				<tr>
					<td> Page Number: </td>
					<td> <?php echo $confirmation['page_number'] ?> </td>
				</tr>
				<tr>
					<td> Line Number: </td>
					<td> <?php echo $confirmation['line_number'] ?> </td>
				</tr>
			</table>
		</td>
		<td width="100"></td>
		<td valign="top">
			<table>
				<tr>
					<td> Godparent(1): </td>
					<td> <?php echo $confirmation_godparent_1['fullname'] ?> </td>
				</tr>
				<tr>
					<td> Residence(1): </td>
					<td> <?php echo $confirmation_godparent_1['residence'] ?> </td>
				</tr>
				<tr>
					<td> Godparent(2): </td>
					<td> <?php echo $confirmation_godparent_2['fullname'] ?> </td>
				</tr>
				<tr>
					<td> Residence(2): </td>
					<td> <?php echo $confirmation_godparent_2['residence'] ?> </td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<input type="submit" value="Edit" class="btn baptismal_edit" id="<?php echo $id ?>" />







