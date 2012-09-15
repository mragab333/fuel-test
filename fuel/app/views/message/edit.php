<h2>Editing Message</h2>
<br>

<?php echo render('message/_form'); ?>
<p>
	<?php echo Html::anchor('message/view/'.$message->id, 'View'); ?> |
	<?php echo Html::anchor('message', 'Back'); ?></p>
