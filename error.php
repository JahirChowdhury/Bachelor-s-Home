
<?php if (count($error) > 0): ?>
	<div class="alert alert-danger">
		<?php foreach ($error as $err): ?>
			<p><?php echo $err; ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>