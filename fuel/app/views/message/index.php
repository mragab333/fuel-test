<h2>Listing Messages</h2>
<br>
<?php if ($messages): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Message</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($messages as $message): ?>		<tr>

			<td><?php echo $message->name; ?></td>
			<td><?php echo $message->message; ?></td>
			<td>
				<?php echo Html::anchor('message/view/'.$message->id, 'View'); ?> |
				<?php echo Html::anchor('message/edit/'.$message->id, 'Edit'); ?> |
				<?php echo Html::anchor('message/delete/'.$message->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Messages.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('message/create', 'Add new Message', array('class' => 'btn btn-success')); ?>

</p>
