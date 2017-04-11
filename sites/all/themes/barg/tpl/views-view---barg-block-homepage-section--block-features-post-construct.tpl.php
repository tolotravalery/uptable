<?php print render($title_prefix); ?>

<div class="row">
	<div class="col-md-12 bordered_block grey_border image_bck" data-image="<?php print base_path().path_to_theme(); ?>/images/white_back.jpg">
		<div class="container">
			<div class="row">
			<?php if ($header): ?>
				<?php print $header; ?>
			<?php endif; ?>
			<?php if ($rows): ?>
			<?php print $rows; ?>
			<?php endif; ?>
			</div>
		</div>
	</div>
</div>