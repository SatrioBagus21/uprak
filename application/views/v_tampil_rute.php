<?php foreach ($rute as $r){ ?>

<center><table border="1px solid collapse black">
<tr>
	<th>Rute From</th>
	<th>Rute To</th>
	<th>Depart At</th>
	<th>Class</th>
	<th>Price</th>
</tr>
<tr>

	<form action="<?php echo base_url() ?>booking/prebooking" method="GET">
		<input type="hidden" value="<?php echo ucwords($r->id) ?>" name="rute_id">
		<input type="hidden" value="<?php echo $passengers ?>" name="passengers">
	<td><?php echo ucwords($r->rute_from) ?></td>
	<td><?php echo ucwords($r->rute_to) ?></td>
	<td><?php echo ucwords($r->depart_at) ?></td>
	<td><?php echo ucwords($r->class) ?></td>
	<td><?php echo ucwords($r->price) ?></td>
	<td><button name="submit">Pilih</button></td>
	</form>
</tr>	
</table>
</center>

<?php } ?>