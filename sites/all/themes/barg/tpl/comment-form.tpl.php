<?php
	$form['author']['name']['#attributes']['class'][] = 'form-control';
	$form['author']['name']['#attributes']['placeholder'][] = 'Your Name';
	$form['author']['mail']['#access'] = TRUE;
	$form['author']['homepage']['#access'] = TRUE;
	$form['author']['mail']['#attributes']['class'][] = 'form-control';
	$form['author']['mail']['#attributes']['placeholder'][] = 'Your Email';
	$form['author']['homepage']['#attributes']['class'][] = 'form-control';
	$form['author']['homepage']['#attributes']['placeholder'][] = 'Your Website';
	$form['subject']['#attributes']['placeholder'][] = 'Title';
	$form['subject']['#attributes']['class'][] = 'form-control';
	$form['comment_body']['und'][0]['value']['#attributes']['class'][] = 'control form-control';
	$form['comment_body']['und'][0]['value']['#attributes']['placeholder'][] = 'Your Message *';
	$form['comment_body']['und'][0]['value']['#rows'] = 8;
	$form['actions']['submit']['#value'] = 'Submit Comment';
	$form['actions']['submit']['#attributes']['class'][] = 'btn-submit btn-default btn';
	$form['actions']['preview']['#access'] = FALSE;
	$form['comment_body']['#required'] = TRUE;	
?>
<div class="row">
	<div class="col-sm-6">
	<?php  print drupal_render($form['author']['name']); ?>
	<?php  print drupal_render($form['author']['mail']); ?>
	<?php  print drupal_render($form['author']['homepage']); ?>
	<?php  print drupal_render($form['subject']); ?>
	</div>
	<div class="col-sm-6">
	<?php print drupal_render($form['comment_body']) ;?>
	</div>
	<div class="col-xs-12">
		<?php print drupal_render($form['actions']['submit']); ?>
	</div>
	<?php print drupal_render_children($form); ?>
</div>