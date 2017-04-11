<?php print render($title_prefix); ?>
		
<?php if ($rows): ?>
<div class="row">
	<div class="col-md-12 bordered_block grey_border image_bck">
		<div class="container">
		<?php if ($header): ?>
			<?php print $header; ?>
		<?php endif; ?>
			<!-- Wrapper-->
            <div class="mid_wrapper">
			<?php print $rows; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>