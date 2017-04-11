<?php print render($title_prefix); ?>

<div class="row">
    <div class="col-md-12 col-md-12 bordered_block">
        <div class="container">
		<?php if ($header): ?>
			<?php print $header; ?>
		<?php endif; ?>
		<?php if ($rows): ?>
		<!-- Wrapper -->
			<div class="mid_wrapper">
			<?php print $rows; ?>
			</div>
		<?php endif; ?>
		<!-- Wrapper End -->
		</div>
	</div>
</div>