<div class="row">	
	<div class="col-md-12 bordered_block bordered_wht_border white_txt image_bck" data-color="#0277bd">		
		<div class="container text-left">
			<div class="row">
			<?php $form['actions']['submit']['#attributes']['class'][] = 'btn btn-white' ;?>
				<?php print drupal_render_children($form); ?>
				<div class="col-md-1 book_item">
					<?php print drupal_render($form['actions']); ?>
				</div>
			</div>
		</div>
	</div>
</div>

