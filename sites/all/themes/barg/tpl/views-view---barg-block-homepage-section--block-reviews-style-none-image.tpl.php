<?php print render($title_prefix); ?>
<?php if ($rows): ?>
<div class="row">	
	<!-- col -->
	<div class="col-md-12 bordered_block image_bck white_txt">
		<!-- Over -->
		<div class="over" data-opacity="0.6" data-image="<?php print base_path().path_to_theme(); ?>/images/overlay.png" data-color="#292929"></div>
		<div class="container">
		<?php if ($header): ?>
			<?php print $header; ?>
		<?php endif; ?>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
					<!-- Wrapper -->
					<div class="review_single_wrapper">
					<?php print $rows; ?>
					</div>
				</div>
			</div>		
		<!-- Wrapper End -->
		</div>
	</div>
</div>
<?php endif; ?>