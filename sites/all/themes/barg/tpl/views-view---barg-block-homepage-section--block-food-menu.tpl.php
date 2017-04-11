<?php print render($title_prefix); ?>
<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>
<div class="row">
	<div class="col-md-12 simple_block bordered_block">
		
		<div class="container-fluid">
			<div class="row">
				<!--Wrapper-->
				<div class="mid_wrapper arrows_top">
				<?php print $rows; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<!-- Wrapper End -->