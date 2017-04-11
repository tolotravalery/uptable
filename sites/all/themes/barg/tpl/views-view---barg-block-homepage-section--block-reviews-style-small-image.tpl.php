<?php print render($title_prefix); ?>
<?php if ($rows): ?>
<div class="row">	
	<!-- col -->
	<div class="col-md-12 bordered_block grey_border image_bck">
		<div class="container">
		<?php if ($header): ?>
			<?php print $header; ?>
		<?php endif; ?>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
					<span class="fa fa-quote-right great_quotes"></span>
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