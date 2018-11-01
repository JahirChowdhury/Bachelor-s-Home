

<?php	include('server.php'); ?>
<?php	include('home_header.php'); ?>
<?php if (empty($_SESSION['name'])): ?>
	<?php header("location: login.php") ?>
<?php endif ?>
	<div id="right" class="right_content col-md-10">
		
	</div>

<?php include('home_footer.php') ?>
