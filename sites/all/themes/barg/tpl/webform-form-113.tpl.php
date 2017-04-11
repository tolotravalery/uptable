<?php $form['actions']['submit']['#attributes']['class'][] = 'btn btn-white' ;?>
<div class="col-md-2 book_item">
	<h4 class="text-left">Join Our Party</h4>
</div>
<?php print drupal_render($form['submitted']['your_name']); ?>
<?php print drupal_render($form['submitted']['guests_name']); ?>
<?php print drupal_render($form['submitted']['your_e_mail']); ?>
<?php print drupal_render($form['submitted']['attending']); ?>
<div class="col-md-1 book_item">
	<?php print drupal_render($form['actions']); ?>
</div>
<?php print drupal_render_children($form); ?>

