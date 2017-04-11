<?php print render($title_prefix); ?>
<div class="row">
	<div class="col-md-12 bordered_block bordered_wht_border image_bck white_txt" data-color="#131313">
		<div class="container">
		<?php if ($header): ?>
			<?php print $header; ?>
		<?php endif; ?>
		<?php if ($rows): ?>
			<div class="row">
               	<!-- Wrapper -->
                <div class="mid_wrapper products">
				<?php print $rows; ?>
				</div>
			</div>
		<?php endif; ?>
		<!-- Wrapper End -->
		</div>
	</div>
</div>