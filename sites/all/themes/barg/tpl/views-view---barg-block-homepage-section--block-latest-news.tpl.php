<?php print render($title_prefix); ?>

<div class="row">
    <!-- cola -->
    <div class="col-md-12 bordered_block grey_border image_bck" data-color="#f4f4f4"> 
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