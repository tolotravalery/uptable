<?php print render($title_prefix); ?>
		
<?php if ($rows): ?>
<div class="row">
	<div class="col-md-12 bordered_block bordered_wht_border image_bck white_txt">
		<!-- Over -->
        <div class="over" data-opacity="0.3" data-color="#000"></div>
		<div class="container">
		<?php if ($header): ?>
			<?php print $header; ?>
		<?php endif; ?>
			<div class="row">
            <!-- Wrapper -->
                <div class="mid_wrapper products">
				<?php print $rows; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>