<?php print render($title_prefix); ?>

<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>
		
<?php if ($rows): ?>
<div class="row">	
	<!-- col -->
	<div class="col-md-12 bordered_block grey_border">
		<div class="container">
			<div class="row">
			<?php print $rows; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>