<?php print render($title_prefix); ?>

<div class="row">
    <!-- col -->
    <div class="col-md-12 bordered_block bordered_wht_border white_txt image_bck">
		<!-- Over -->
		<div class="over" data-opacity="0.6" data-color="#292929"></div>
		<div class="container text-center">
		<?php if ($header): ?>
			<?php print $header; ?>
		<?php endif; ?>
		<?php if ($rows): ?>
			<!-- Wrapper -->
	        <div class="partners_wrapper clearfix">
				<?php print $rows; ?>
			</div>
		<?php endif; ?>
		<!-- Row End -->
		</div>
	</div>
</div>