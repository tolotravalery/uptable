<div class="row">
	<div class="col-md-12 bordered_block image_bck">
		<div class="over" data-opacity="0.8" data-image="<?php print base_path(); ?>sites/default/files/overlay.png"></div>
		<div class="simple_block white_txt">
			<div class="row">
			<?php $form['actions']['submit']['#attributes']['class'][] = 'btn btn-rounded btn-white' ;?>
				<div class="col-md-4 wow fadeInUp">
                    <h3 class="text-left">Book Now</h3>
                </div>
                <div class="col-md-2 wow fadeInUp book_item" data-wow-delay="0.2s">
					<?php print drupal_render($form['submitted']['date']); ?>
				</div>
				<div class="col-md-1 wow fadeInUp book_item" data-wow-delay="0.4s">
					<?php print drupal_render($form['submitted']['time']); ?>
				</div>
				<div class="col-md-2 wow fadeInUp book_item" data-wow-delay="0.6s">
					<?php print drupal_render($form['submitted']['name']); ?>	
				</div>
				<div class="col-md-2 wow fadeInUp book_item" data-wow-delay="0.8s">
					<?php print drupal_render($form['submitted']['phone']); ?>
				</div>
				<?php print drupal_render_children($form); ?>
				<div class="col-md-1 wow fadeInUp book_item" data-wow-delay="1s">
					<?php print drupal_render($form['actions']); ?>
				</div>
			</div>
		</div>
	</div>
</div>

