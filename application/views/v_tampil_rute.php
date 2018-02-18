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
	<td><?php echo ucwords($r->rute_from) ?></td>
	<td><?php echo ucwords($r->rute_to) ?></td>
	<td><?php echo ucwords($r->depart_at) ?></td>
	<td><?php echo ucwords($r->class) ?></td>
	<td><?php echo ucwords($r->price) ?></td>
</tr>	
</table>
</center>

<?php } ?>