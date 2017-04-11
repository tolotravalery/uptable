<?php
	$form['mail']['#attributes']['placeholder'] = 'Email Address';
	$form['mail']['#attributes']['class'][] = 'form-control';
?>
<p>
	<?php print t('Subscribe to our newsletter.') ?>
</p>
<?php print drupal_render($form); ?>
