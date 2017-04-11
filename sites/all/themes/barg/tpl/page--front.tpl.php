<?php require_once(drupal_get_path('theme','barg').'/tpl/header.tpl.php');?>

<!--Intro-->
<?php if ($page['intro']): ?>
		<?php print render($page['intro']); ?>
<?php endif; ?>
<!-- Intro End -->
<?php if($page['content']): ?>
	<?php
		if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
			print render($tabs);
		endif;
		print $messages;
		unset($page['content']['system_main']['default_message']);
	?>
	<?php print render($page['content']) ?>
<?php endif; ?>
<?php if ($page['section']): ?>
		<?php print render($page['section']); ?>
<?php endif; ?>
<?php require_once(drupal_get_path('theme','barg').'/tpl/footer.tpl.php');?>