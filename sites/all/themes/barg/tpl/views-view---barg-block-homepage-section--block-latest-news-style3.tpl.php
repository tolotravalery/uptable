<?php print render($title_prefix); ?>

<div class="row">	
	<!-- col -->
	<div class="col-md-12 bordered_block bordered_wht_border white_txt image_bck" data-color="#292929">
		<div class="container">
		<?php if ($header): ?>
			<?php print $header; ?>
		<?php endif; ?>
		<?php if ($rows): ?>
			<div class="row">
			<?php print $rows; ?>
			</div>
		<?php endif; ?>
		<!-- Row End -->
		</div>
	</div>
</div>