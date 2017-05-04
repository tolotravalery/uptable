<?php print render($title_prefix); ?>

<div class="row" style=" background-color:#f4f4f4;">
    <div class="col-md-12 bordered_block grey_border">
        <div class="container">
		<?php if ($header): ?>
			<?php print $header; ?>
		<?php endif; ?>
		<?php if ($rows): ?>
		<!-- Wrappera -->
			<div class="mid_wrapper">
			<?php print $rows; ?>
			</div>
		<?php endif; ?>
		<!-- Wrapper End -->
		</div>
	</div>
</div>